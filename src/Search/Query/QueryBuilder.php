<?php namespace Nord\Lumen\Elasticsearch\Search\Query;

use Nord\Lumen\Elasticsearch\Search\Query\Compound\BoolQuery;
use Nord\Lumen\Elasticsearch\Search\Query\FullText\MatchQuery;
use Nord\Lumen\Elasticsearch\Search\Query\FullText\MultiMatchQuery;
use Nord\Lumen\Elasticsearch\Search\Query\Geo\GeoDistanceQuery;
use Nord\Lumen\Elasticsearch\Search\Query\Joining\HasChildQuery;
use Nord\Lumen\Elasticsearch\Search\Query\Joining\HasParentQuery;
use Nord\Lumen\Elasticsearch\Search\Query\Joining\NestedQuery;
use Nord\Lumen\Elasticsearch\Search\Query\TermLevel\RangeQuery;
use Nord\Lumen\Elasticsearch\Search\Query\TermLevel\TermQuery;
use Nord\Lumen\Elasticsearch\Search\Query\TermLevel\TermsQuery;

class QueryBuilder
{

    /**
     * @return BoolQuery
     */
    public function createBoolQuery()
    {
        return new BoolQuery();
    }


    /**
     * @return MatchQuery
     */
    public function createMatchQuery()
    {
        return new MatchQuery();
    }


    /**
     * @return MultiMatchQuery
     */
    public function createMultiMatchQuery()
    {
        return new MultiMatchQuery();
    }


    /**
     * @return TermQuery
     */
    public function createTermQuery()
    {
        return new TermQuery();
    }


    /**
     * @return TermsQuery
     */
    public function createTermsQuery()
    {
        return new TermsQuery();
    }


    /**
     * @return RangeQuery
     */
    public function createRangeQuery()
    {
        return new RangeQuery();
    }


    /**
     * @return GeoDistanceQuery
     */
    public function createGeoDistanceQuery()
    {
        return new GeoDistanceQuery();
    }


    /**
     * @return NestedQuery
     */
    public function createNestedQuery()
    {
        return new NestedQuery();
    }


    /**
     * @return HasChildQuery
     */
    public function createHasChildQuery()
    {
        return new HasChildQuery();
    }


    /**
     * @return HasParentQuery
     */
    public function createHasParentQuery()
    {
        return new HasParentQuery();
    }
}