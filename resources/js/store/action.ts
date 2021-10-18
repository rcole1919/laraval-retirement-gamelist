import {Info, Columns, Game, EditGame} from '../type';

export enum ActionType {
	SET_INFO = 'SET_INFO',
	// ADD_COLUMNS = 'ADD_COLUMNS',
	ADD_PLATFORM = 'ADD_PLATFORM',
	ADD_CATEGORY = 'ADD_CATEGORY',
	ADD_GAME = 'ADD_GAME',
	DELETE_PLATFORM = 'DELETE_PLATFORM',
	DELETE_CATEGORY = 'DELETE_CATEGORY',
	DELETE_GAME = 'DELETE_GAME',
	EDIT_GAME = 'EDIT_GAME',
	REDIRECT_TO_ROUTE = 'REDIRECT_TO_ROUTE'
}

export const ActionCreator = {
	setInfo: (info: Info) => ({
		type: ActionType.SET_INFO,
		payload: info,
	}),
	// addColumns: (columns: Columns) => ({
	// 	type: ActionType.ADD_COLUMNS,
	// 	payload: columns,
	// }),
	addPlatform: (platform: string) => ({
		type: ActionType.ADD_PLATFORM,
		payload: platform,
	}),
	addCategory: (category: string) => ({
		type: ActionType.ADD_CATEGORY,
		payload: category,
	}),
	addGame: (game: Game) => ({
		type: ActionType.ADD_GAME,
		payload: game,
	}),
	deletePlatform: (platform: string) => ({
		type: ActionType.DELETE_PLATFORM,
		payload: platform,
	}),
	deleteCategory: (category: string) => ({
		type: ActionType.DELETE_CATEGORY,
		payload: category,
	}),
	deleteGame: (id: string|number) => ({
		type: ActionType.DELETE_GAME,
		payload: id,
	}),
	editGame: (game: EditGame) => ({
		type: ActionType.EDIT_GAME,
		payload: game,
	}),
	redirectToRoute: (route: string) => ({
		type: ActionType.REDIRECT_TO_ROUTE,
		payload: route,
	})
};
