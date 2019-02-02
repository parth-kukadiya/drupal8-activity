<?php
/**
 * @file
 * Contains \Drupal\activity\Plugin\Block\XaiBlock.
 */
namespace Drupal\activity\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'activity' block.
 *
 * @Block(
 *   id = "activity_block",
 *   admin_label = @Translation("Activity block"),
 *   category = @Translation("Custom activity block example")
 * )
 */
class ActivityBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */

  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the custom activity.',
    );
  }
}