import Link from 'next/link'
import style from './index.module.css';

function HomePage() {
    return (    
    <div className="header">
      <style jsx global>{`
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }

      .header{
        background: #ccc;
        text-align:center;
        padding:20px;
      }

      .header a{
        margin: 0 20px;
      }
      `}</style>
      <Link href="/">
        <a>Home</a>
      </Link>
      <Link href="/sobre">
        <a>Sobre</a>
      </Link>
      <Link href="/contato">
        <a>Contato</a>
      </Link>
    </div>);
  }
  
  export default HomePage