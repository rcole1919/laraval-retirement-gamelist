import {ActionType, ActionCreator} from './action';
import {createStore, applyMiddleware} from 'redux';
import {composeWithDevTools} from 'redux-devtools-extension';
import {redirect} from './middlewares/redirect';
import {State, Action} from '../type'

const initialState: State = {
	platforms: [],
	categories: [],
	games: [],
};

// export const reducer = (state = initialState, action: Action) => {
// 	switch
// }
