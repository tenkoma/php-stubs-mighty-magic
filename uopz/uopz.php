<?php
/**
 * @link https://gist.github.com/andrewmackrodt/486557e7ddb71d053891
 * @link http://php.net/manual/en/book.uopz.php
 */

/**
 * Invoked by exit() and die(), recieves no arguments. Return boolean TRUE to exit, FALSE to continue
 */
define('ZEND_EXIT', 79);
/**
 * Invoked by object construction, receives the class of object being created as the only argument
 */
define('ZEND_NEW', 68);
/**
 * Invoked by the throw construct, receives the class of exception being thrown as the only argument
 */
define('ZEND_THROW', 108);
/**
 * Invoked upon composure, recieves the class the name of the class being fetched as the only argument
 */
define('ZEND_FETCH_CLASS', 109);
/**
 * Invoked upon composure, recieves the class the trait is being added to as the first argument, and the name of the trait as the second argument
 */
define('ZEND_ADD_TRAIT', 154);
/**
 * Invoked upon composure, recieves the class the interface is being added to as the first argument, and the name of the interface as the second argument
 */
define('ZEND_ADD_INTERFACE', 144);
/**
 * Invoked by instanceof operator, recieves the object being verified as the first argument, and the name of the class which that object should be as the second argument
 */
define('ZEND_INSTANCEOF', 138);
// The following constants control the VM's behaviour after a user handler is invoked, be extremely careful!
/**
 * Advance 1 opcode and continuue
 */
define('ZEND_USER_OPCODE_CONTINUE', 0);
/**
 * Enter into new op_array without recursion
 */
define('ZEND_USER_OPCODE_ENTER', 3);
/**
 * Return to calling op_array within the same executor
 */
define('ZEND_USER_OPCODE_LEAVE', 4);
/**
 * Dispatch to original opcode handler
 */
define('ZEND_USER_OPCODE_DISPATCH', 2);
/**
 * Dispatch to a specific handler (OR'd with ZEND opcode constant)
 */
define('ZEND_USER_OPCODE_DISPATCH_TO', 256);
/**
 * Exit from executor (return from function)
 */
define('ZEND_USER_OPCODE_RETURN', 1);
// The following modifiers are registered as constants by uopz
/**
 * Mark function as public, the default
 */
define('ZEND_ACC_PUBLIC', 256);
/**
 * Mark function as protected
 */
define('ZEND_ACC_PROTECTED', 512);
/**
 * Mark function as private
 */
define('ZEND_ACC_PRIVATE', 1024);
/**
 * Mark function as static
 */
define('ZEND_ACC_STATIC', 1);
/**
 * Mark function as final
 */
define('ZEND_ACC_FINAL', 4);
/**
 * Mark function as abstract
 */
define('ZEND_ACC_ABSTRACT', 2);
/**
 * Dummy registered for consistency, the default kind of class entry
 */
define('ZEND_ACC_CLASS', 0);
/**
 * Mark class as interface
 */
define('ZEND_ACC_INTERFACE', 128);
/**
 * Mark class as trait
 */
define('ZEND_ACC_TRAIT', 288);
/**
 * Used for getting flags only
 */
define('ZEND_ACC_FETCH', 9223372036854775807);

/**
 * By default uopz disables the exit opcode, so exit() calls are practically ignored. uopz_allow_exit() allows to control this behavior.
 *
 * @link http://php.net/manual/en/function.uopz-allow-exit.php
 * @param bool $allow
 */
function uopz_allow_exit($allow){}

/**
 * Makes $class extend $parent
 *
 * @link http://php.net/manual/en/function.uopz-extend.php
 * @param string $class
 * @param string $parent
 * @return bool
 **/
function uopz_extend($class, $parent) {}

/**
 * Get or set the flags on a class or function entry at runtime
 *
 * @link http://php.net/manual/en/function.uopz-flags.php
 * @param string $class
 * @param string $function
 * @param int $flags
 * @return int
 */
function uopz_flags($class, $function, $flags = null) {}
// same name, but difference arguments
if (true) {
    /**
     * Get or set the flags on a class or function entry at runtime
     *
     * @link http://php.net/manual/en/function.uopz-flags.php
     * @param string $function
     * @param int $flags
     * @return int
     */
    function uopz_flags($function, $flags = null) {}
}


/**
 * Retrieves the last set exit status, i.e. the value passed to exit().
 *
 * @link http://php.net/manual/en/function.uopz-get-exit-status.php
 * @return mixed
 */
function uopz_get_exit_status(){}

/**
 * Returns the current mock for $class.
 *
 * @link http://php.net/manual/en/function.uopz-get-mock.php
 * @param string $class
 * @return mixed
 */
function uopz_get_mock($class){}

/**
 * Gets the return value of the $function previously set by uopz_set_return().
 *
 * @link http://php.net/manual/en/function.uopz-get-return.php
 * @param string $class
 * @param string $function
 * @return mixed
 */
function uopz_get_return($class, $function){}
// same name, but difference arguments
if (true) {
    /**
     * Gets the return value of the $function previously set by uopz_set_return().
     *
     * @link http://php.net/manual/en/function.uopz-get-return.php
     * @param string $function
     * @return mixed
     */
    function uopz_get_return($function){}
}

/**
 * Makes $class implement $interface
 *
 * @link http://php.net/manual/en/function.uopz-implement.php
 * @param string $class
 * @param string $interface
 * @return bool
 **/
function uopz_implement($class, $interface){}

/**
 * Redefines the given $constant as $value
 *
 * @link http://php.net/manual/en/function.uopz-redefine.php
 * @param string $class
 * @param string $constant
 * @param mixed  $value
 * @return bool
 **/
function uopz_redefine($class, $constant, $value = null){}
// same name, but difference arguments
if (true) {
    /**
     * Redefines the given $constant as $value
     *
     * @link http://php.net/manual/en/function.uopz-redefine.php
     * @param string $constant
     * @param mixed  $value
     * @return bool
     **/
    function uopz_redefine($constant, $value = null){}
}

/**
 * If $mock is a string containing the name of a class then it will be instantiated instead of $class. $mock can also be an object.
 *
 * @link http://php.net/manual/en/function.uopz-set-mock.php
 * @param string $class
 * @param mixed $mock
 */
function uopz_set_mock($class, $mock){}

/**
 * Sets the return value of the $function to $value. If $value is a Closure and $execute is set, the Closure will be executed in place of the original function.
 *
 * @link http://php.net/manual/en/function.uopz-set-return.php
 * @param string $class
 * @param string $function
 * @param mixed $value
 * @param bool $execute
 * @return bool
 */
function uopz_set_return($class, $function, $value, $execute = false){}
// same name, but difference arguments
if (true) {
    /**
     * Sets the return value of the $function to $value. If $value is a Closure and $execute is set, the Closure will be executed in place of the original function.
     *
     * @link http://php.net/manual/en/function.uopz-set-return.php
     * @param string $function
     * @param mixed $value
     * @param bool $execute
     * @return bool
     */
    function uopz_set_return($function, $value, $execute = false){}
}

/**
 * Removes the constant at runtime
 *
 * @link http://php.net/manual/en/function.uopz-undefine.php
 * @param string $class
 * @param string $constant
 * @return bool
 **/
function uopz_undefine($class, $constant){}
// same name, but difference arguments
if (true) {
    /**
     * Removes the constant at runtime
     *
     * @link http://php.net/manual/en/function.uopz-undefine.php
     * @param string $constant
     * @return bool
     **/
    function uopz_undefine($constant){}
}

/**
 * Unsets the previously set mock for $class.
 *
 * @link http://php.net/manual/en/function.uopz-unset-mock.php
 * @param string $class
 */
function uopz_unset_mock($class){}

/**
 * Unsets the return value of the $function previously set by uopz_set_return().
 *
 * @link http://php.net/manual/en/function.uopz-unset-return.php
 * @param string $class
 * @param string $function
 * @return bool
 */
function uopz_unset_return($class, $function){}
// same name, but difference arguments
if (true) {
    /**
     * Unsets the return value of the $function previously set by uopz_set_return().
     *
     * @link http://php.net/manual/en/function.uopz-unset-return.php
     * @param string $function
     * @return bool
     */
    function uopz_unset_return($function){}
}