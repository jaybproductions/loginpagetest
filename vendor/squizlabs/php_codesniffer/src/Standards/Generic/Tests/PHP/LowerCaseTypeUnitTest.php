<?php
/**
 * Unit test class for the LowerCaseType sniff.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\Generic\Tests\PHP;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class LowerCaseTypeUnitTest extends AbstractSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {
        return [
            14 => 1,
            15 => 1,
            16 => 1,
            17 => 1,
            18 => 1,
            21 => 4,
            22 => 3,
            23 => 3,
            25 => 1,
            26 => 2,
            27 => 2,
            32 => 4,
            36 => 1,
            37 => 1,
            38 => 1,
            39 => 1,
            43 => 2,
            44 => 1,
            46 => 1,
        ];
    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];
    }//end getWarningList()
}//end class
