import React from 'react';
import {Router as BrowserRouter, Switch, Route, Link} from 'react-router-dom';
import {AppRoute} from '../../const';
import browserHistory from '../../browser-history';

function AppDemo() {
    return (
        <BrowserRouter history={browserHistory}>
            <Switch>
                <Route exact path={AppRoute.DEMO}>
                    демо
                    <Link to={AppRoute.DEMO}>1</Link>
                    <Link to={AppRoute.SETTINGS_DEMO}>2</Link>
                    <Link to={AppRoute.LIST_DEMO}>3</Link>
                    <Link to={AppRoute.TABLE_DEMO}>4</Link>
                </Route>
                <Route exact path={AppRoute.SETTINGS_DEMO}>
                настр
                    <Link to={AppRoute.DEMO}>1</Link>
                    <Link to={AppRoute.SETTINGS_DEMO}>2</Link>
                    <Link to={AppRoute.LIST_DEMO}>3</Link>
                    <Link to={AppRoute.TABLE_DEMO}>4</Link>
                </Route>
                <Route exact path={AppRoute.LIST_DEMO}>
                спис
                    <Link to={AppRoute.DEMO}>1</Link>
                    <Link to={AppRoute.SETTINGS_DEMO}>2</Link>
                    <Link to={AppRoute.LIST_DEMO}>3</Link>
                    <Link to={AppRoute.TABLE_DEMO}>4</Link>
                </Route>
                <Route exact path={AppRoute.TABLE_DEMO}>
                ьабл
                    <Link to={AppRoute.DEMO}>1</Link>
                    <Link to={AppRoute.SETTINGS_DEMO}>2</Link>
                    <Link to={AppRoute.LIST_DEMO}>3</Link>
                    <Link to={AppRoute.TABLE_DEMO}>4</Link>
                </Route>
            </Switch>
        </BrowserRouter>
    )
}

export default AppDemo;
