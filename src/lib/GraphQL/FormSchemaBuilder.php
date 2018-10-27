<?php
namespace BD\EzPlatformGraphQLForm\GraphQL;

use BD\EzPlatformGraphQLBundle\Schema\SchemaBuilder;
use EzSystems\EzPlatformPageFieldType\FieldType\Page\Block\Definition\BlockAttributeDefinition;
use EzSystems\EzPlatformPageFieldType\FieldType\Page\Block\Definition\BlockDefinitionFactory;
use Symfony\Component\Yaml\Yaml;

class FormSchemaBuilder implements SchemaBuilder
{
    public function __construct()
    {
    }

    public function build(array &$schema)
    {
    }

}