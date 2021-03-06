<?php
/**
* @author 		Peter Taiwo
* @since 		1.4.5
# Copyright (c) 2018 PhoxPHP
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.
*/

namespace App\Statics;

use App\Statics\Contracts\StaticsContract;
use Kit\Cache\CacheManager;

class Cache implements StaticsContract
{

	/**
	* {@inheritDoc}
	*/
	public static function __callStatic(String $method, Array $arguments)
	{
		$factory = new CacheManager();
		return call_user_func_array([
			$factory,
			$method
		], $arguments);
	}

}