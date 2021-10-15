import React from 'react';
import { Router as BrowserRouter, Switch, Route, Link } from 'react-router-dom';
import { AppRoute } from '../../const';
import browserHistory from '../../browser-history';
import Demo from '../demo/demo';
import Settings from '../settings/settings';
import List from '../list/list';
import Table from '../table/table';

function AppDemo() {
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

export default AppDemo;
