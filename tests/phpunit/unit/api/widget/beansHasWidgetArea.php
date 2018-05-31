<?php
/**
 * Tests for beans_has_widget_area()
 *
 * @package Beans\Framework\Tests\Unit\API\Widget
 *
 * @since   1.5.0
 */

namespace Beans\Framework\Tests\Unit\API\Widget;

use Beans\Framework\Tests\Unit\API\Widget\Includes\Beans_Widget_Test_Case;
use Brain\Monkey;

require_once dirname( __FILE__ ) . '/includes/class-beans-widget-test-case.php';

/**
 * Class Tests_BeansHasWidgetArea
 *
 * @package Beans\Framework\Tests\Unit\API\Widget
 * @group   api
 * @group   api-widget
 */
class Tests_BeansHasWidgetArea extends Beans_Widget_Test_Case {

	/**
	 * Test beans_has_widget_area() should return false when widget area is not registered.
	 */
	public function testShouldReturnFalseWhenWidgetAreaNotRegistered() {
		$this->assertFalse( beans_has_widget_area( 'unregistered-area' ) );
	}

	/**
	 * Test beans_has_widget_area() should return true when widget area is registered.
	 */
	public function testShouldReturnTrueWhenWidgetAreaRegistered() {
		global $wp_registered_sidebars;

		$wp_registered_sidebars['test_sidebar'] = array(
			'id' => 'test_sidebar',
			'name' => 'Test Sidebar',
		);

		// Run test.
		$this->assertTrue( beans_has_widget_area( 'test_sidebar' ) );
	}
}
