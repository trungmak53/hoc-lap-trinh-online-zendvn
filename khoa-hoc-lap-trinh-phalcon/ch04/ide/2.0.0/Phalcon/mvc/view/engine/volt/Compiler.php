<?php

namespace Phalcon\Mvc\View\Engine\Volt;

class Compiler implements \Phalcon\Di\InjectionAwareInterface
{

    protected $_dependencyInjector;


    protected $_view;


    protected $_options;


    protected $_arrayHelpers;


    protected $_level = 0;


    protected $_foreachLevel = 0;


    protected $_blockLevel = 0;


    protected $_exprLevel = 0;


    protected $_extended = false;


    protected $_autoescape = false;


    protected $_extendedBlocks;


    protected $_currentBlock;


    protected $_blocks;


    protected $_forElsePointers;


    protected $_loopPointers;


    protected $_extensions;


    protected $_functions;


    protected $_filters;


    protected $_macros;


    protected $_prefix;


    protected $_currentPath;


    protected $_compiledTemplatePath;


    /**
     * Phalcon\Mvc\View\Engine\Volt\Compiler
     *
     * @param \Phalcon\Mvc\ViewInterface $view 
     */
	public function __construct($view = null) {}

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector 
     */
	public function setDI(\Phalcon\DiInterface $dependencyInjector) {}

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\DiInterface 
     */
	public function getDI() {}

    /**
     * Sets the compiler options
     *
     * @param array $options 
     */
	public function setOptions($options) {}

    /**
     * Sets a single compiler option
     *
     * @param string $option 
     * @param mixed $value 
     */
	public function setOption($option, $value) {}

    /**
     * Returns a compiler's option
     *
     * @param string $option 
     * @return string 
     */
	public function getOption($option) {}

    /**
     * Returns the compiler options
     *
     * @return array 
     */
	public function getOptions() {}

    /**
     * Fires an event to registered extensions
     *
     * @param string $name 
     * @param array $arguments 
     * @return mixed 
     */
	public final function fireExtensionEvent($name, $arguments = null) {}

    /**
     * Registers a Volt's extension
     *
     * @param object $extension 
     * @return \Phalcon\Mvc\View\Engine\Volt\Compiler 
     */
	public function addExtension($extension) {}

    /**
     * Returns the list of extensions registered in Volt
     *
     * @return array 
     */
	public function getExtensions() {}

    /**
     * Register a new function in the compiler
     *
     * @param string $name 
     * @param Closure|string $definition 
     * @return \Phalcon\Mvc\View\Engine\Volt\Compiler 
     */
	public function addFunction($name, $definition) {}

    /**
     * Register the user registered functions
     *
     * @return array 
     */
	public function getFunctions() {}

    /**
     * Register a new filter in the compiler
     *
     * @param string $name 
     * @param Closure|string $definition 
     * @return \Phalcon\Mvc\View\Engine\Volt\Compiler 
     */
	public function addFilter($name, $definition) {}

    /**
     * Register the user registered filters
     *
     * @return array 
     */
	public function getFilters() {}

    /**
     * Set a unique prefix to be used as prefix for compiled variables
     *
     * @param string $prefix 
     * @return \Phalcon\Mvc\View\Engine\Volt\Compiler 
     */
	public function setUniquePrefix($prefix) {}

    /**
     * Return a unique prefix to be used as prefix for compiled variables and contexts
     *
     * @return string 
     */
	public function getUniquePrefix() {}

    /**
     * Resolves attribute reading
     *
     * @param array $expr 
     * @return string 
     */
	public function attributeReader($expr) {}

    /**
     * Resolves function intermediate code into PHP function calls
     *
     * @param array $expr 
     * @return string 
     */
	public function functionCall($expr) {}

    /**
     * Resolves filter intermediate code into a valid PHP expression
     *
     * @param array $test 
     * @param string $left 
     * @return string 
     */
	public function resolveTest($test, $left) {}

    /**
     * Resolves filter intermediate code into PHP function calls
     *
     * @param array $filter 
     * @param string $left 
     * @return string 
     */
	final protected function resolveFilter($filter, $left) {}

    /**
     * Resolves an expression node in an AST volt tree
     *
     * @param array $expr 
     * @return string 
     */
	final public function expression($expr) {}

    /**
     * Compiles a block of statements
     *
     * @param array $statements 
     * @return string|array 
     */
	final protected function _statementListOrExtends($statements) {}

    /**
     * Compiles a "foreach" intermediate code representation into plain PHP code
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileForeach($statement, $extendsMode = false) {}

    /**
     * Generates a 'forelse' PHP code
     *
     * @return string 
     */
	public function compileForElse() {}

    /**
     * Compiles a 'if' statement returning PHP code
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileIf($statement, $extendsMode = false) {}

    /**
     * Compiles a "elseif" statement returning PHP code
     *
     * @param array $statement 
     * @return string 
     */
	public function compileElseIf($statement) {}

    /**
     * Compiles a "cache" statement returning PHP code
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileCache($statement, $extendsMode = false) {}

    /**
     * Compiles a "set" statement returning PHP code
     *
     * @param array $statement 
     * @return string 
     */
	public function compileSet($statement) {}

    /**
     * Compiles a "do" statement returning PHP code
     *
     * @param array $statement 
     * @return string 
     */
	public function compileDo($statement) {}

    /**
     * Compiles a "return" statement returning PHP code
     *
     * @param array $statement 
     * @return string 
     */
	public function compileReturn($statement) {}

    /**
     * Compiles a "autoescape" statement returning PHP code
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileAutoEscape($statement, $extendsMode) {}

    /**
     * Compiles a '{{' '}}' statement returning PHP code
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileEcho($statement) {}

    /**
     * Compiles a 'include' statement returning PHP code
     *
     * @param array $statement 
     * @return string 
     */
	public function compileInclude($statement) {}

    /**
     * Compiles macros
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileMacro($statement, $extendsMode) {}

    /**
     * Compiles calls to macros
     *
     * @param array $statement 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileCall($statement, $extendsMode) {}

    /**
     * Traverses a statement list compiling each of its nodes
     *
     * @param mixed $statements 
     * @param boolean $extendsMode 
     * @param array $statement 
     * @return string 
     */
	final protected function _statementList($statements, $extendsMode = false) {}

    /**
     * Compiles a Volt source code returning a PHP plain version
     *
     * @param string $viewCode 
     * @param boolean $extendsMode 
     * @return string 
     */
	protected function _compileSource($viewCode, $extendsMode = false) {}

    /**
     * Compiles a template into a string
     * <code>
     * echo $compiler->compileString('{{ "hello world" }}');
     * </code>
     *
     * @param string $viewCode 
     * @param boolean $extendsMode 
     * @return string 
     */
	public function compileString($viewCode, $extendsMode = false) {}

    /**
     * Compiles a template into a file forcing the destination path
     * <code>
     * $compiler->compile('views/layouts/main.volt', 'views/layouts/main.volt.php');
     * </code>
     *
     * @param string $path 
     * @param string $compiledPath 
     * @param boolean $extendsMode 
     * @return string|array 
     */
	public function compileFile($path, $compiledPath, $extendsMode = false) {}

    /**
     * Compiles a template into a file applying the compiler options
     * This method does not return the compiled path if the template was not compiled
     * <code>
     * $compiler->compile('views/layouts/main.volt');
     * require $compiler->getCompiledTemplatePath();
     * </code>
     *
     * @param string $templatePath 
     * @param boolean $extendsMode 
     * @return string|array 
     */
	public function compile($templatePath, $extendsMode = false) {}

    /**
     * Returns the path that is currently being compiled
     *
     * @return string 
     */
	public function getTemplatePath() {}

    /**
     * Returns the path to the last compiled template
     *
     * @return string 
     */
	public function getCompiledTemplatePath() {}

    /**
     * Parses a Volt template returning its intermediate representation
     * <code>
     * print_r($compiler->parse('{{ 3 + 2 }}'));
     * </code>
     *
     * @param string $viewCode 
     * @return array 
     */
	public function parse($viewCode) {}

}
