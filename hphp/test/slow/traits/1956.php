<?hh

trait English {
  public function say() {
    echo "Banana\n";
  }
}
trait Portugues {
  use English {
    English::say as fala;
  }
}
trait Italiano {
  use Portugues {
    Portugues::fala as parla;
  }
}
class Talker {
  use Italiano;
}
<<__EntryPoint>> function main(): void {
$talker = new Talker();
$talker->say();
$talker->fala();
$talker->parla();
}
