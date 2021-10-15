import React from 'react';
import {useLocation} from 'react-router-dom';
import browserHistory from '../../browser-history';
import {AppRoute} from '../../const';

function Tools() {
	const location = useLocation();
	const toList = () => browserHistory.push(AppRoute.LIST_DEMO);
	const toTable = () => browserHistory.push(AppRoute.TABLE_DEMO);
	const toSettings = () => browserHistory.push(AppRoute.SETTINGS_DEMO);
	return (
		<div className="tools">
			<button onClick={toList} disabled={location.pathname === AppRoute.LIST_DEMO} type="button" className="tools__button" title="Режим списка по категориям">
				<svg width={18} height={18}>
					<use xlinkHref="#icon-mode-rg" />
				</svg>
			</button>
			<button onClick={toTable} disabled={location.pathname === AppRoute.TABLE_DEMO} type="button" className="tools__button" title="Режим сводной таблицы">
				<svg width={18} height={18}>
					<use xlinkHref="#icon-mode-table" />
				</svg>
			</button>
			<button onClick={toSettings} type="button" className="tools__button" title="Настроить таблицы">
				<svg width={18} height={18}>
					<use xlinkHref="#icon-settings" />
				</svg>
			</button>
			<button type="button" className="tools__button" title="Добавить игру">
				<svg width={18} height={18}>
					<use xlinkHref="#icon-add-game" />
				</svg>
			</button>
		</div>
	)
}

export default Tools;
