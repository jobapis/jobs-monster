<?php namespace JobApis\Jobs\Client\Queries;

class MonsterQuery extends AbstractQuery
{
    /**
     * q
     *
     * The search query.
     *
     * @var string
     */
    protected $q;

    /**
     * where
     *
     * The search location.
     *
     * @var string
     */
    protected $where;

    /**
     * page
     *
     * Page
     *
     * @var integer
     */
    protected $page;

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
        return 'http://rss.jobsearch.monster.com/rssquery.ashx';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return $this->q;
    }

    /**
     * Required parameters
     *
     * @return array
     */
    protected function requiredAttributes()
    {
        return [];
    }
}
