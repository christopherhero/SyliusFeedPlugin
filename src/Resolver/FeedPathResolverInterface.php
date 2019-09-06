<?php

declare(strict_types=1);

namespace Setono\SyliusFeedPlugin\Resolver;

use Setono\SyliusFeedPlugin\Model\FeedInterface;
use SplFileInfo;

interface FeedPathResolverInterface
{
    public function resolve(FeedInterface $feed, string $channelCode, string $localeCode): SplFileInfo;
}