import {useState, useEffect} from 'react';
import Produto from '../Components/Produto';
import {Container, Row} from 'react-bootstrap';

export default function Produtos() {

const [produtos, setProdutos] = useState([]);

useEffect(async () => {
    const resposta = await fetch("http://localhost/meus_projetos/back-end/conectabanco.php")
    const dados = await resposta.json()
    setProdutos(dados);

    }, []);
    
    return (
        <Container>
            <h1>Produtos</h1>
            <br></br>
            <Row>
            {produtos && produtos.map(item => <Produto key={item.id} imagem={item.imagem} nome={item.descricao} preco={item.preco} categoria={item.categoria} />)}
            </Row>
        </Container>
        )
    }

