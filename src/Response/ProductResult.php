<?php

declare(strict_types=1);

namespace Baraja\HeurekaBiddingApi\Response;


final class ProductResult extends BaseResponse
{

	/** @var int */
	private $id;

	/** @var string */
	private $name;

	/** @var string */
	private $slug;

	/** @var string */
	private $url;


	/**
	 * @param mixed[] $haystack
	 */
	public function __construct(array $haystack)
	{
		$this->id = $haystack['id'];
		$this->name = $haystack['name'];
		$this->slug = $haystack['slug'];
		$this->url = $haystack['url'];
	}


	public function getId(): int
	{
		return $this->id;
	}


	public function getName(): string
	{
		return $this->name;
	}


	public function getSlug(): string
	{
		return $this->slug;
	}


	public function getUrl(): string
	{
		return $this->url;
	}
}
