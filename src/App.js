import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={`${process.env.PUBLIC_URL}/dgyoontv.png`} className="App-logo" alt="logo" />
        <p>
        Hi, this is Justin. And right up there, That is my roblox character. Cute isn't it?<br></br>
           Well, this website is underconstruction right now so... see you soon!<br></br>
           You might as well click "Learn React" to learn how this is made.
        </p>
        <a
          className="App-link"
          href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;
