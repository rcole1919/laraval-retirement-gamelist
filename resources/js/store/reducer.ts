import { ActionType } from './action';
import { createStore, applyMiddleware } from 'redux';
import { composeWithDevTools } from 'redux-devtools-extension';
import { redirect } from './middlewares/redirect';
import { State, Action } from '../type'

const initialState: State = {
	platforms: [],
	categories: [],
	games: [],
};

export const reducer = (state = initialState, action: Action) => {
	switch (action.type) {
		case ActionType.SET_INFO:
			return {
				...state,
				platforms: action.payload.platforms,
				categories: action.payload.categories,
				games: action.payload.games,
			}
		case ActionType.ADD_PLATFORM:
			state.platforms.push(action.payload);
			return state;
		case ActionType.ADD_CATEGORY:
			state.categories.push(action.payload);
			return state;
		case ActionType.ADD_GAME:
			state.games.push(action.payload);
			return state;
		case ActionType.DELETE_PLATFORM:
			return {
				...state,
				platforms: state.platforms.filter((el) => el !== action.payload),
			}
		case ActionType.DELETE_CATEGORY:
			return {
				...state,
				categories: state.categories.filter((el) => el !== action.payload),
			}
		case ActionType.DELETE_GAME:
			return {
				...state,
				games: state.games.filter((el) => el.id !== action.payload),
			}
		case ActionType.EDIT_GAME:
			return {
				...state,
				games: state.games.map((el) => {
					if (el.id === action.payload.id) {
						el[action.payload.field] = action.payload.value;
					}
					return el;
				})
			}
		default:
			return state;
	}
};

export const store = createStore(reducer,
	composeWithDevTools(
		applyMiddleware(redirect),
	),
);
