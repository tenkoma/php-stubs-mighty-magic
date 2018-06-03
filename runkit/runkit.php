<?php
/**
 * Constants
 * @link http://php.net/manual/en/runkit.constants.php
 */
const RUNKIT_IMPORT_FUNCTIONS = 1;
const RUNKIT_IMPORT_CLASS_METHODS = 2;
const RUNKIT_IMPORT_CLASS_CONSTS = 4;
const RUNKIT_IMPORT_CLASS_PROPS = 8;
const RUNKIT_IMPORT_CLASS_STATIC_PROPS = 16;
const RUNKIT_IMPORT_CLASSES = RUNKIT_IMPORT_CLASS_METHODS|RUNKIT_IMPORT_CLASS_CONSTS|
    RUNKIT_IMPORT_CLASS_PROPS|RUNKIT_IMPORT_CLASS_STATIC_PROPS;
const RUNKIT_IMPORT_OVERRIDE = 32;
const RUNKIT_ACC_PUBLIC = 256;
const RUNKIT_ACC_PROTECTED = 512;
const RUNKIT_ACC_PRIVATE = 1024;
const RUNKIT_ACC_STATIC = 1;
const CLASSKIT_ACC_PUBLIC = 256;
const CLASSKIT_ACC_PROTECTED = 512;
const CLASSKIT_ACC_PRIVATE = 1024;
/**
 * Convert a base class to an inherited class, add ancestral methods when appropriate
 *
 * @link http://php.net/manual/en/function.runkit-class-adopt.php
 * @param string $classname
 * @param string $parentname
 * @return bool
 */
function runkit_class_adopt($classname, $parentname){}
/**
 * Convert an inherited class to a base class, removes any method whose scope is ancestral
 *
 * @link http://php.net/manual/en/function.runkit-class-emancipate.php
 * @param string $classname
 * @return bool
 */
function runkit_class_emancipate($classname){}
/**
 * Similar to define(), but allows defining in class definitions as well
 *
 * @link http://php.net/manual/en/function.runkit-constant-add.php
 * @param string $constname
 * @param mixed $value
 * @return bool
 */
function runkit_constant_add($constname, $value){}
/**
 * Redefine an already defined constant
 *
 * @link http://php.net/manual/en/function.runkit-constant-redefine.php
 * @param string $constname
 * @param mixed $newvalue
 * @return bool
 */
function runkit_constant_redefine($constname, $newvalue){}
/**
 * Remove/Delete an already defined constant
 *
 * @link http://php.net/manual/en/function.runkit-constant-remove.php
 * @param string $constname
 * @return bool
 */
function runkit_constant_remove($constname){}
/**
 * Add a new function, similar to create_function()
 *
 * @link http://php.net/manual/en/function.runkit-function-add.php
 * @param string $funcname
 * @param string $arglist
 * @param string $code
 * @param bool $return_by_reference
 * @param string $doc_comment
 * @return void
 */
function runkit_function_add($funcname, $arglist, $code, $return_by_reference = null, $doc_comment = null){}
// same name, but difference arguments
if (true) {
    /**
     * Add a new function, similar to create_function()
     *
     * @link http://php.net/manual/en/function.runkit-function-add.php
     * @param string $funcname
     * @param closure $closure
     * @param string $doc_comment
     * @return bool
     */
    function runkit_function_add($funcname, $closure, $doc_comment = null){}
}
/**
 * Copy a function to a new function name
 *
 * @link http://php.net/manual/en/function.runkit-function-copy.php
 * @param string $funcname
 * @param string $targetname
 * @return bool
 */
function runkit_function_copy($funcname, $targetname){}
/**
 * Replace a function definition with a new implementation
 *
 * @link http://php.net/manual/en/function.runkit-function-redefine.php
 * @param string $funcname
 * @param string $arglist
 * @param string $code
 * @param bool $return_by_reference
 * @param string $doc_comment
 * @return void
 */
function runkit_function_redefine($funcname, $arglist, $code, $return_by_reference = null, $doc_comment = null){}
// same name, but difference arguments
if (true) {
    /**
     * Replace a function definition with a new implementation
     *
     * @link http://php.net/manual/en/function.runkit-function-redefine.php
     * @param string $funcname
     * @param closure $closure
     * @param string $doc_comment
     * @return bool
     */
    function runkit_function_redefine($funcname, $closure, $doc_comment = null){}
}
/**
 * Remove a function definition
 *
 * @link http://php.net/manual/en/function.runkit-function-remove.php
 * @param string $funcname
 * @return bool
 */
function runkit_function_remove($funcname){}
/**
 * Change a function's name
 *
 * @link http://php.net/manual/en/function.runkit-function-rename.php
 * @param string $funcname
 * @param string $newname
 * @return bool
 */
function runkit_function_rename($funcname, $newname){}
/**
 * Process a PHP file importing function and class definitions, overwriting where appropriate
 *
 * @link http://php.net/manual/en/function.runkit-import.php
 * @param string $filename
 * @param int $flags
 * @return bool
 */
function runkit_import($filename, $flags = RUNKIT_IMPORT_CLASS_METHODS){}
/**
 * Check the PHP syntax of the specified file
 *
 * @link http://php.net/manual/en/function.runkit-lint-file.php
 * @param string $filename
 * @return bool
 */
function runkit_lint_file($filename){}
/**
 * Check the PHP syntax of the specified php code
 *
 * @link http://php.net/manual/en/function.runkit-lint.php
 * @param string $code
 * @return bool
 */
function runkit_lint($code){}
/**
 * Dynamically adds a new method to a given class
 *
 * @link http://php.net/manual/ja/function.runkit-method-add.php
 * @param string $classname
 * @param string $methodname
 * @param string $args
 * @param string $code
 * @param int $flag
 * @param null $doc_comment
 * @return bool
 */
function runkit_method_add($classname, $methodname, $args, $code, $flag = RUNKIT_ACC_PUBLIC, $doc_comment = null){}
// same name, but different arguments.
if (true) {
    /**
     * Dynamically adds a new method to a given class
     *
     * @link http://php.net/manual/ja/function.runkit-method-add.php
     * @param string $classname
     * @param string $methodname
     * @param closure $closure
     * @param int $flag
     * @param null $doc_comment
     * @return bool
     */
    function runkit_method_add($classname, $methodname, $closure, $flag = RUNKIT_ACC_PUBLIC, $doc_comment = null){}
}
/**
 * Copies a method from class to another
 *
 * @link http://php.net/manual/en/function.runkit-method-copy.php
 * @param string $dClass
 * @param string $dMethod
 * @param string $sClass
 * @param string $sMethod
 * @return bool
 */
function runkit_method_copy($dClass, $dMethod, $sClass, $sMethod=null){}
/**
 * Dynamically changes the code of the given method
 *
 * @link http://php.net/manual/ja/function.runkit-method-redefine.php
 * @param string $classname
 * @param string $methodname
 * @param string $args
 * @param string $code
 * @param int $flag
 * @param null $doc_comment
 * @return bool
 */
function runkit_method_redefine($classname, $methodname, $args, $code, $flag = RUNKIT_ACC_PUBLIC, $doc_comment = null){}
// same name, but different arguments.
if (true) {
    /**
     * Dynamically changes the code of the given method
     *
     * @link http://php.net/manual/ja/function.runkit-method-redefine.php
     * @param string $classname
     * @param string $methodname
     * @param closure $closure
     * @param int $flags
     * @param null $doc_comment
     * @return bool
     */
    function runkit_method_redefine($classname, $methodname, $closure, $flags = RUNKIT_ACC_PUBLIC, $doc_comment = null){}
}
/**
 * Dynamically removes the given method
 *
 * @link http://php.net/manual/en/function.runkit-method-remove.php
 * @param string $classname
 * @param string $methodname
 * @return bool
 */
function runkit_method_remove($classname, $methodname){}
/**
 * Dynamically changes the name of the given method
 *
 * @link http://php.net/manual/en/function.runkit-method-rename.php
 * @param string $classname
 * @param string $methodname
 * @param string $newname
 * @return bool
 */
function runkit_method_rename($classname, $methodname, $newname){}
/**
 * Determines if the current functions return value will be used
 *
 * @link http://php.net/manual/en/function.runkit-return-value-used.php
 * @return bool
 */
function runkit_return_value_used(){}
/**
 * Specify a function to capture and/or process output from a runkit sandbox
 *
 * @link http://php.net/manual/en/function.runkit-sandbox-output-handler.php
 * @param object $sandbox
 * @param mixed $callback
 * @return mixed
 */
function runkit_sandbox_output_handler($sandbox, $callback){}
/**
 * Return numerically indexed array of registered superglobals
 *
 * @link http://php.net/manual/en/function.runkit-superglobals.php
 * @return array
 */
function runkit_superglobals(){}
/**
 * Runkit Sandbox Class -- PHP Virtual Machine
 *
 * @link http://php.net/manual/en/runkit.sandbox.php
 */
class Runkit_Sandbox
{
    /**
     * Runkit_Sandbox constructor.
     *
     * @param array $options
     * @return void
     */
    function __construct($options=[]){}
}
/**
 * Runkit Anti-Sandbox Class
 *
 * @link http://php.net/manual/en/runkit.sandbox-parent.php
 */
class Runkit_Sandbox_Parent
{
    /**
     * Runkit_Sandbox_Parent constructor.
     *
     * @return void
     */
    public function __construct(){}
}