<?php
/**
 * Composer installer for custom editor WordPress block packages.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @package JMichaelWard\ComposerInstaller\Installer
 * @since   2019-02-16
 */

namespace JMichaelWard\ComposerInstaller\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class ClientProjectInstaller
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @package JMichaelWard\Composer\Installer
 * @since   2018-12-06
 */
class WPBlockInstaller extends LibraryInstaller {
	/**
	 * Get the install path for the package type.
	 *
	 * @param PackageInterface $package Instance of the Composer package interface.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-02-16
	 * @return string
	 */
	public function getInstallPath( PackageInterface $package ) {
		return 'blocks';
	}

	/**
	 * Determine whether the package is supported by this installer.
	 *
	 * @param string $package_type The type of package.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since
	 * @return bool
	 */
	public function supports( $package_type ) {
		return 'wordpress-block' === $package_type;
	}
}
