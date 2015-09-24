<?php
/**
 * Prints out the php environment informations for admins.
 *
 * Can be useful if you can't run this command directly on the server because you haven't got the shell access.
 */
class PHPInfoTask extends BuildTask {
	/**
	 * title of the task
	 *
	 * @var string
	 */
	public $title = 'Display PHPInfo information';

	/**
	 * description of the task
	 *
	 * @var string
	 */
	public $description = 'Displays the output of phpinfo() for this environment.';

	/**
	 * @param SS_HTTPResponse $request
	 */
	public function run($request = null) {
		if (Permission::check('ADMIN') !== true) {
			$this->message('Only admins can run this task.');
		} else {
			phpinfo();
		}
	}

	/**
	 * @param string $text
	 */
	protected function message($text) {
		if(PHP_SAPI !== 'cli') $text = '<p>' . $text.'</p>';

		echo $text . PHP_EOL;
	}
}
