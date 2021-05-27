<?php

/*
 * The MIT License
 *
 * Copyright 2019 Austrian Centre for Digital Humanities.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace acdhOeaw\arche\thumbnails\handler;

use acdhOeaw\arche\thumbnails\ResourceInterface;

/**
 * Description of FormatInterface
 *
 * @author zozlak
 */
interface HandlerInterface {

    public function __construct();

    /**
     * Returns a list of handled mime types.
     * 
     * @return array<string>
     */
    public function getHandledMimeTypes(): array;

    /**
     * Is the handler able to maintain the aspect ratio?
     * (in other words is it possible to pass only one dimension and the other
     * will be computed automatically)
     *
     * @return bool
     */
    public function maintainsAspectRatio(): bool;

    /**
     * Creates a thumbnail with given dimensions for a given resource
     * 
     * @param ResourceInterface $resource
     * @param int $width
     * @param int $height
     * @param string $path
     */
    public function createThumbnail(ResourceInterface $resource, int $width,
                                    int $height, string $path): void;
}