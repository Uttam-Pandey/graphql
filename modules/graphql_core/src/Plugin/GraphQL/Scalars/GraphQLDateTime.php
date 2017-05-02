<?php

namespace Drupal\graphql_core\Plugin\GraphQL\Scalars;

use Youshido\GraphQL\Type\Scalar\DateTimeType;

/**
 * Scalar string type.
 *
 * @GraphQLScalar(
 *   name = "DateTime"
 * )
 */
class GraphQLDateTime extends DateTimeType {

}
