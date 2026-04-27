<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages;

use Doctrine\Inflector\InflectorFactory;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Victormgomes\RestMessages\Enums\CrudAction;

class RestMessages
{
    public function generate(Model|string|null $model = null, ?CrudAction $action = null): string
    {
        $action = $action ?? $this->detectAction();

        $resourceNameString = $this->resolveModelName($model);

        $finalName = $this->applyGrammar($resourceNameString, $action);

        $gender = $this->resolveGender($resourceNameString);

        return __(
            "rest-messages::crud.success.{$action->value}.{$gender}",
            ['resource' => $finalName]
        );
    }

    private function resolveModelName(Model|string|null $model): string
    {
        if ($model) {
            return class_basename($model);
        }

        $routeParam = collect(request()->route()->parameters() ?? [])
            ->first(fn ($param) => $param instanceof Model);

        if ($routeParam) {
            return class_basename($routeParam);
        }

        $controllerClass = request()->route()?->getControllerClass();
        if ($controllerClass) {
            $className = class_basename($controllerClass);

            return Str::replaceLast('Controller', '', $className);
        }

        throw new Exception('Não foi possível detectar o Model automaticamente. Informe-o no método: $this->message(Model::class)');
    }

    private function applyGrammar(string $className, CrudAction $action): string
    {
        $key = "models.{$className}";
        $rawName = Lang::has($key) ? __($key) : $className;

        if (is_array($rawName)) {
            $rawName = $rawName['singular'] ?? $rawName[0];
        }

        if ($action !== CrudAction::INDEX) {
            return $rawName;
        }

        return $this->pluralize($rawName);
    }

    private function pluralize(string $word): string
    {
        $language = match (app()->getLocale()) {
            'pt_BR', 'pt' => 'portuguese',
            'es' => 'spanish',
            'fr' => 'french',
            default => 'english',
        };

        return InflectorFactory::createForLanguage($language)->build()->pluralize($word);
    }

    private function resolveGender(string $className): string
    {
        return Lang::has("genders.{$className}")
            ? __("genders.{$className}")
            : 'm';
    }

    private function detectAction(): CrudAction
    {
        $method = request()->route()?->getActionMethod();
        $enum = $method ? CrudAction::tryFrom($method) : null;

        if (! $enum) {
            return match ($method) {
                'list' => CrudAction::INDEX,
                'create' => CrudAction::STORE,
                'edit' => CrudAction::UPDATE,
                'remove' => CrudAction::DESTROY,
                default => throw new Exception("Ação '{$method}' não mapeada. Use: \$this->message(action: CrudAction::SUA_ACAO)")
            };
        }

        return $enum;
    }
}
