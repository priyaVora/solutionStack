import React from 'react';

class SearchBox extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
        <form className="pa4">
        <label className="pa4">
          <input className='f3 link dim black underline pointer' type="text" name="search" />
        </label>
        <input type="submit" value="Search" />
      </form>
    );
  }
}

export default SearchBox;