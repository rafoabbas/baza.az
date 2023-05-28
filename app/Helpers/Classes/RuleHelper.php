<?php

namespace App\Helpers\Classes;

class RuleHelper
{
    protected string $prefix = '%';

    protected string $suffix = '%';

    protected array|null $locales = [];

    public static function make(array $rules, ?array $locales = null): array
    {
        $factory = app(self::class);

        $factory->setLocales($locales);

        return $factory->parse($rules);
    }

    public function setLocales(?array $locales = null): void
    {
        $this->locales = $locales ?: Language::keys();
    }

    public function getLocales(): ?array
    {
        return $this->locales;
    }

    public function parse(array $input): array
    {

        $rules = [];

        foreach ($input as $key => $value) {
            if (!$this->isTranslatable($key)) {
                $rules[$key] = $value;

                continue;
            }

            foreach ($this->getLocales() as $locale) {
                $rules[$this->formatKey($locale, $key)] = $this->formatRule($locale, $value);
            }
        }

        return $rules;
    }

    protected function formatKey(string $locale, string $key): string
    {
        return $this->replacePlaceholder($locale, $key);
    }

    protected function formatRule(string $locale, $rule)
    {
        if (is_string($rule)) {
            if (strpos($rule, '|')) {
                return implode('|', array_map(function (string $rule) use ($locale) {
                    return $this->replacePlaceholder($locale, $rule);
                }, explode('|', $rule)));
            }

            return $this->replacePlaceholder($locale, $rule);
        } elseif (is_array($rule)) {
            return array_map(function ($rule) use ($locale) {
                return $this->formatRule($locale, $rule);
            }, $rule);
        }

        return $rule;
    }

    protected function replacePlaceholder(string $locale, string $value): string
    {
        return preg_replace($this->getPattern(), $this->getReplacement($locale), $value);
    }

    protected function getReplacement(string $locale): string
    {
        return '$1_' . $locale;
    }

    protected function getPattern(): string
    {
        $prefix = preg_quote($this->prefix);
        $suffix = preg_quote($this->suffix);

        return '/' . $prefix . '([^\.' . $prefix . $suffix . ']+)' . $suffix . '/';
    }

    protected function isTranslatable(string $key): bool
    {
        return str_contains($key, $this->prefix) && str_contains($key, $this->suffix);
    }
}
