import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {

    constructor(props){
      super(props);
      this.state = {
        text:"hello"
      }
      this.change = this.change.bind(this)
    }
    change(){
      this.setState({
        text:"hi"
      })
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>

                            <div className="card-body">
                                {this.state.text}
                            </div>
                            <div className="card-body">
                                <button onClick = {this.change}>Click</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
