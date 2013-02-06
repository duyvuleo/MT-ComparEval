<?php


class TasksPresenter extends BasePresenter {

	public function renderList( $experimentId ) {
		$this->template->tasks = $this->getService( 'tasks' )->getTasks( $experimentId );
	}

	public function renderDetail( $id ) {
		$this->template->taskIds = array( $id );
	}

	public function renderCompare( $id1, $id2 ) {
		$this->template->taskIds = array( $id1, $id2 );
		$this->setView( 'detail' );
	}


}
