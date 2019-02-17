<?php
/**
 * Plugin class for Client Project package installation.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @package JMichaelWard\Composer
 * @since   2019-02-16
 */

namespace JMichaelWard\ComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use JMichaelWard\ComposerInstaller\Installer\WPBlockInstaller;

/**
 * Class ClientProjectInstallerPlugin
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @package JMichaelWard\Composer
 * @since   2019-02-16
 */
class WPEditorBlockInstallerPlugin implements PluginInterface {
	/**
	 * Activate the installer plugin.
	 *
	 * @param Composer    $composer Composer instance.
	 * @param IOInterface $io       Composer IO.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since 2019-02-16
	 */
	public function activate( Composer $composer, IOInterface $io ) {
		$composer->getInstallationManager()->addInstaller(
			new WPBlockInstaller( $io, $composer )
		);
	}
}
