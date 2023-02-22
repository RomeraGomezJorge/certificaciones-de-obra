<?php


namespace App\Shared\Application\Get\Collection;


use App\Shared\Infrastructure\Utils\FilterUtilsForAssociationField;

final class GetEntityFromFilterOrNull
{

    public function __invoke(array &$filters, Finder $finder, string $associationFieldName)
    {

        if (!FilterUtilsForAssociationField::isFieldNameDefineAsFilter($filters,
            $associationFieldName)) {
            return NULL;
        };

        $id = FilterUtilsForAssociationField::getValueFromFilters(
            $filters,
            $associationFieldName
        );

        return $finder->__invoke($id);
    }

    public function removeAssociationsFilter($filter, $associationFieldName): array
    {
        return FilterUtilsForAssociationField::removeFilterEqualsTo(
            [$associationFieldName],
            $filter
        );
    }

}