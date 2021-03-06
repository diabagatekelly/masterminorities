<?php

namespace Give\Framework\FieldsAPI\FieldCollection;

use Give\Framework\FieldsAPI\FieldCollection\Contract\Node;
use Give\Framework\FieldsAPI\FieldCollection\Contract\GroupNode;
use Give\Framework\FieldsAPI\FieldCollection\Exception\ReferenceNodeNotFoundException;

/**
 * @unreleased
 */
trait InsertNode {

	/**
	 * @unreleased
	 *
	 * @param string $siblingName
	 * @param Node $node
	 *
	 * @return $this
	 */
	public function insertAfter( $siblingName, Node $node ) {
		$this->checkNameCollisionDeep( $node );
		$this->insertAfterRecursive( $siblingName, $node );
		return $this;
	}

	/**
	 * @unreleased
	 *
	 * @param string $siblingName
	 * @param Node $node
	 *
	 * @throws ReferenceNodeNotFoundException
	 *
	 * @return void
	 */
	protected function insertAfterRecursive( $siblingName, Node $node ) {
		$siblingIndex = $this->getNodeIndexByName( $siblingName );
		if ( false !== $siblingIndex ) {
			$this->insertAtIndex(
				$siblingIndex + 1,
				$node
			);
			return;
		} elseif ( $this->nodes ) {
			foreach ( $this->nodes as $childNode ) {
				if ( $childNode instanceof GroupNode ) {
					$childNode->insertAfterRecursive( $siblingName, $node );
				}
			}
			return;
		}
		throw new ReferenceNodeNotFoundException( $siblingName );
	}

	/**
	 * @unreleased
	 *
	 * @param string $siblingName
	 * @param Node $node
	 *
	 * @return $this
	 */
	public function insertBefore( $siblingName, Node $node ) {
		$this->checkNameCollisionDeep( $node );
		$this->insertBeforeRecursive( $siblingName, $node );
		return $this;
	}

	/**
	 * @unreleased
	 *
	 * @param string $siblingName
	 * @param Node $node
	 *
	 * @throws ReferenceNodeNotFoundException
	 *
	 * @return void
	 */
	protected function insertBeforeRecursive( $siblingName, Node $node ) {
		$siblingIndex = $this->getNodeIndexByName( $siblingName );
		if ( false !== $siblingIndex ) {
			$this->insertAtIndex(
				$siblingIndex - 1,
				$node
			);
			return;
		} elseif ( $this->nodes ) {
			foreach ( $this->nodes as $childNode ) {
				if ( $childNode instanceof GroupNode ) {
					$childNode->insertBeforeRecursive( $siblingName, $node );
				}
			}
			return;
		}
		throw new ReferenceNodeNotFoundException( $siblingName );
	}

	/**
	 * @unreleased
	 */
	protected function insertAtIndex( $index, $node ) {
		array_splice( $this->nodes, $index, 0, [ $node ] );
	}
}
