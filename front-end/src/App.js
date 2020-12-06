import Menu from './Components/Menu';
import Rota from './rotas';

import {BrowserRouter} from 'react-router-dom';

import {Container} from 'react-bootstrap';

import './App.css'

function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <header>
          <Menu />
        </header>
        <main>
          <Container fluid>
            <Rota />
          </Container>
        </main>
      </div>
    </BrowserRouter>
   
  );
}

export default App;
