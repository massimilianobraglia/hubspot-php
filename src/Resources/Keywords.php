<?php

namespace SevenShores\Hubspot\Resources;

class Keywords extends Resource
{
    /**
     * Get all keywords.
     *
     * @param string $search Optional search query.
     * @return \SevenShores\Hubspot\Response
     */
    function all($search = null)
    {
        $endpoint = '/keywords/v1/keywords';

        $queryString = build_query_string(['search' => $search]);

        return $this->client->request('get', $endpoint, [], $queryString);
    }

    /**
     * Get a keyword.
     *
     * @param string $keyword_guid
     * @return \SevenShores\Hubspot\Response
     */
    function getById($keyword_guid)
    {
        $endpoint = "/keywords/v1/keywords/{$keyword_guid}";

        return $this->client->request('get', $endpoint);
    }

    /**
     * Create a new keyword.
     *
     * @param array $keyword
     * @return \SevenShores\Hubspot\Response
     */
    function create($keyword)
    {
        $endpoint = "/keywords/v1/keywords";

        $options['json'] = $keyword;

        return $this->client->request('put', $endpoint, $options);
    }

    /**
     * Delete a keyword.
     *
     * @param string $keyword_guid
     * @return \SevenShores\Hubspot\Response
     */
    function delete($keyword_guid)
    {
        $endpoint = "/keywords/v1/keywords/{$keyword_guid}";

        return $this->client->request('delete', $endpoint);
    }

}
