#  Coding Practice

## Basic Rules

* KISS *(Keep It Simple, Stupid)*
* Add PHPDoc formatted comments to all functions, constants, etc.
* Function and methods names should be all lowercase and use underscores to separate words e.g. `my_public_method()`.
* Curly brackets should be placed on the line below the statement.
* Code should be properly indented using tabs not spaces.
* Add a space after all `if`, `while`, and `for` statements.
* Add a space after function parameters e.g. `my_function($param1, $param2)`
* Files will be saved in UTF-8 format using *NIX style linefeeds e.g. `\n`.
* No shorthand PHP tags `<? ?>`.
* Constants should be all caps with underscores separating words e.g. `MY_CONSTANT`.
* No closing PHP tag `?>` at the end of PHP documents.
* Private & Protected methods should have an underscore prefix e.g. `_my_private_method()`.
* Use single quotes `'` for strings, only use double quotes `"` when necessary.

## Sample Code

Below is is a sample function with proper formatting and comments, as well 
as some code using the defined function.

	{.php}
	<?php

	/**
	 * Verify if the specified filename has one of the defined file extensions.
	 *
	 * @since Version 2.0 (Alpha 1)
	 * 
	 * @param string $filename the name of the file
	 * @param string|array $extension the extension(s) to verify against
	 *
	 * @return bool
	 *
	 */
	function has_extension($filename, $extension)
	{
		$file_extension = substr($filename, strrpos($filename, '.'));

		if (is_array($extension))
		{
			return (in_array($file_extension,$extension)) ? true : false;
		}
		else
		{
			return ($file_extension == $extension) ? true : false;
		}
	}

	/** 
	 * Example Usage:
	 * @todo combine if statements
	 */	
	if ($handle = opendir($dir))
	{
		while (false !== ($file = readdir($handle)))
		{
			if ($file != '.' && $file != '..')
			{
				if (is_file($file) && has_extension($file, array('.php', '.html')))
				{
					var_dump($file);
				}
			}
		}
		closedir($handle);
	}