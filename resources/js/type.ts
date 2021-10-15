export type Game = {
	id: number|string;
	name: string;
	platform: string;
	mediaType: string;
	category: string;
}

export type Info = {
	platforms: string[];
	categories: string[];
	games: Game[];
}

export type Columns = {
	platforms: string[];
	categories: string[];
}

export type State = {
	platforms: string[];
	categories: string[];
	games: Game[];
}

export type Action = {
	type: string,
	payload?: any,
}
