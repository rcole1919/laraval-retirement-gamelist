import React, {useRef} from 'react';
import AddedItem from '../added-item/added-item';

function AddFormItem({title, column, type}) {
	const inputRef = useRef<HTMLInputElement>(null)

	return (
		<div className="add__item">
			<div className="add__field-wrapper">
				<label htmlFor={`add-${type}`} className="add__label">{title}</label>
				<div className="add__input-wrapper">
					<input
						type="text"
						id={`add-${type}`}
						className="add__input"
						ref={inputRef}
					/>
				</div>
				<button type="button" className="add__button" />
			</div>
			{
				column.length > 0 ?
					<div className="add__added-wrapper">
						{
							column.map((el) => <AddedItem key={el} name={el} type={type} />)
						}
					</div> : ''
			}
		</div>
	)
}

export default AddFormItem;
