<?php
namespace Neos\Flow\Http\Helper;

use Neos\Utility\Arrays;

/**
 * Helper to unify different HTTP request arguments.
 */
abstract class ArgumentsHelper
{
    /**
     * Takes the raw GET & POST arguments and maps them into the request object.
     * Afterwards all mapped arguments can be retrieved by the getArgument(s) method, no matter if they
     * have been GET, POST or PUT arguments before.
     *
     * @param array $getArguments Arguments as found in $_GET
     * @param array $postArguments Arguments as found in $_POST
     * @param array $untangledFiles Untangled $_FILES as provided by \Neos\Flow\Http\Helper\UploadedFilesHelper::untangleFilesArray
     * @return array the unified arguments
     * @see \Neos\Flow\Http\Helper\UploadedFilesHelper::untangleFilesArray
     */
    public static function buildUnifiedArguments(array $getArguments, array $postArguments, array $untangledFiles)
    {
        $arguments = Arrays::arrayMergeRecursiveOverrule($getArguments, $postArguments);
        $arguments = Arrays::arrayMergeRecursiveOverrule($arguments, $untangledFiles);

        return $arguments;
    }
}
