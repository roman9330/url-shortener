<?php

namespace roman9330\UrlShortener\ValueObjects;

class UrlCodePair
{
    protected string $code;
    protected string $url;
    protected string $date_create;

    /**
     * @param string $code
     * @param string $url
     */
    public function __construct(string $code, string $url)
    {
        $this->code = $code;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }


}