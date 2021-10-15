import {Info, Columns, Game} from '../type';

export enum ActionType {
	SET_INFO = 'SET_INFO',
	ADD_COLUMNS = 'ADD_PLATFORMS',
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
	addColumns: (columns: Columns) => ({
		type: ActionType.ADD_COLUMNS,
		payload: columns,
	}),
	deletePlatform: (platform: string) => ({
		type: ActionType.DELETE_PLATFORM,
		payload: platform,
	}),
	deleteCategory: (status: string) => ({
		type: ActionType.DELETE_CATEGORY,
		payload: status,
	}),
	deleteGame: (id: string|number) => ({
		type: ActionType.DELETE_GAME,
		payload: id,
	}),
	editGame: (game: Game) => ({
		type: ActionType.EDIT_GAME,
		payload: game,
	}),
	redirectToRoute: (route: string) => ({
		type: ActionType.REDIRECT_TO_ROUTE,
		payload: route,
	})
};
