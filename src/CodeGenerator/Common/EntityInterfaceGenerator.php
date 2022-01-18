<?php

declare(strict_types=1);

namespace EsRadAppGenerator\CodeGenerator\Common;

use EsRadAppGenerator\CodeGenerator\CustomNettePrinter;
use Nette\PhpGenerator\PhpFile;

final class EntityInterfaceGenerator
{
    final public function __construct()
    {
    }

    public function generate(): string
    {
        $file = new PhpFile();
        $file
            ->setStrictTypes();

        $namespace = $file->addNamespace('App\Common');

        $namespace->addInterface('Entity');

        return (new CustomNettePrinter())->printFile($file);
    }
}
