import React, {useEffect} from 'react';
import {Router as BrowserRouter, Switch, Route} from 'react-router-dom';
import {AppRoute} from '../../const';
import browserHistory from '../../browser-history';
import Demo from '../demo/demo';
import Settings from '../settings/settings';
import List from '../list/list';
import Table from '../table/table';
// import {connect} from 'react-redux';
// import {ActionCreator} from '../../store/action';
// import {mockList} from '../../mock';

function AppDemo() {
	// useEffect(() => {
	// 	init()
	// }, [init]);

  return (
    <BrowserRouter history={browserHistory}>
      <Switch>
        <Route exact path={AppRoute.DEMO}>
          <Demo />
        </Route>
        <Route exact path={AppRoute.SETTINGS_DEMO}>
          <Settings />
        </Route>
        <Route exact path={AppRoute.LIST_DEMO}>
          <List/>
        </Route>
        <Route exact path={AppRoute.TABLE_DEMO}>
          <Table />
        </Route>
      </Switch>
    </BrowserRouter>
  )
}

// const mapDispatchToProps = (dispatch) => ({
// 	init() {
// 		dispatch(ActionCreator.setInfo(mockList))
// 	}
// })

export default AppDemo;
// export {AppDemo};
// export default connect(null, mapDispatchToProps)(AppDemo);
