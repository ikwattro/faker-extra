<?php

namespace Ikwattro\FakerExtra\Provider;

use Faker\Provider\Base as BaseProvider;

class Skill extends BaseProvider
{
    protected static $progLanguages = array(
        ".NET","A# (Axiom)","A-0 System","A+","A++","ABAP","ABC","ABC ALGOL","ABLE","ABSET","ABSYS","ACC","Accent",
        "Ace DASL","ACL2","ACT-III","Action!","ActionScript","Ada","Adenine","Agda","Agilent VEE","Agora","AIMMS","Alef",
        "ALF","ALGOL 58","ALGOL 60","ALGOL 68","ALGOL W","Alice","Alma-0","AmbientTalk","Amiga E","AMOS","AMPL","APL",
        "App Inventor for Android's visual block language","AppleScript","Arc","ARexx","Argus","AspectJ","Assembly language",
        "ATS","Ateji PX","AutoHotkey","Autocoder","AutoIt","AutoLISP / Visual LISP","Averest","AWK","Axum","Babbage","Bash",
        "BASIC","bc","BCPL","BeanShell","Batch (Windows/Dos)","Bertrand","BETA","Bigwig","Bistro","BitC","BLISS","Blue","Bon",
        "Boo","Boomerang","Bourne shell (including bash and ksh)","BREW","BPEL","C--","C++ - ISO/IEC 14882","C# - ISO/IEC 23270",
        "C/AL","Caché ObjectScript","C Shell","Caml","Candle","Cayenne","CDuce","Cecil","Cel","Cesil","Ceylon","CFML","Cg","Ch",
        "Chapel","CHAIN","Charity","Charm","Chef","CHILL","CHIP-8","chomski","ChucK","CICS","Cilk","CL (IBM)","Claire","Clarion",
        "Clean","Clipper","CLIST","Clojure","CLU","CMS-2","COBOL - ISO/IEC 1989","Cobra","CODE","CoffeeScript","Cola","ColdC",
        "ColdFusion","COMAL","Combined Programming Language (CPL)","COMIT","Common Intermediate Language (CIL)",
        "Common Lisp (also known as CL)","COMPASS","Component Pascal","Constraint Handling Rules (CHR)","Converge","Cool","Coq",
        "Coral 66","Corn","CorVision","COWSEL","CPL","csh","CSP","Csound","CUDA","Curl","Curry","Cyclone","Cython",
        "DASL (Datapoint's Advanced Systems Language)","DASL (Distributed Application Specification Language)","Dart","DataFlex",
        "Datalog","DATATRIEVE","dBase","dc","DCL","Deesel (formerly G)","Delphi","DCL","DinkC","DIBOL","Dog","Draco","DRAKON","Dylan",
        "DYNAMO","E#","Ease","Easy PL/I","Easy Programming Language","EASYTRIEVE PLUS","ECMAScript","Edinburgh IMP","EGL","Eiffel",
        "ELAN","Elixir","Elm","Emacs Lisp","Emerald","Epigram","EPL","Erlang","es","Escapade","Escher","ESPOL","Esterel","Etoys",
        "Euclid","Euler","Euphoria","EusLisp Robot Programming Language","CMS EXEC","EXEC 2","Executable UML","F#","Factor","Falcon",
        "Fancy","Fantom","FAUST","Felix","Ferite","FFP","Fjölnir","FL","Flavors","Flex","FLOW-MATIC","FOCAL","FOCUS","FOIL","FORMAC",
        "@Formula","Forth","Fortran - ISO/IEC 1539","Fortress","FoxBase","FoxPro","FP","FPr","Franz Lisp","F-Script","FSProg",
        "Google Apps Script","Game Maker Language","GameMonkey Script","GAMS","GAP","G-code","Genie","GDL","Gibiane","GJ","GEORGE",
        "GLSL","GNU E","GM","Go","Go!","GOAL","Gödel","Godiva","GOM (Good Old Mad)","Goo","Gosu","GOTRAN","GPSS","GraphTalk","GRASS",
        "Groovy","Hack (programming language)","HAL/S","Hamilton C shell","Harbour","Hartmann pipelines","Haskell","Haxe",
        "High Level Assembly","HLSL","Hop","Hope","Hugo","Hume","HyperTalk","IBM Basic assembly language","IBM HAScript","IBM Informix-4GL",
        "IBM RPG","ICI","Icon","Id","IDL","Idris","IMP","Inform","Io","Ioke","IPL","IPTSCRAE","ISLISP","ISPF","ISWIM","J","J#","J++","JADE",
        "Jako","JAL","Janus","JASS","Java","JavaScript","JCL","JEAN","Join Java","JOSS","Joule","JOVIAL","Joy","JScript","JScript .NET",
        "JavaFX Script","Julia","Kaleidoscope","Karel","Karel++","KEE","KIF","Kojo","Kotlin","KRC","KRL","KRL (KUKA Robot Language)",
        "KRYPTON","ksh","L# .NET","LabVIEW","Ladder","Lagoona","LANSA","Lasso","LaTeX","Lava","LC-3","Leda","Legoscript","LIL","LilyPond",
        "Limbo","Limnor","LINC","Lingo","Linoleum","LIS","LISA","Lisaac","Lisp - ISO/IEC 13816","Lite-C","Lithe","Little b","Logo",
        "Logtalk","LPC","LSE","LSL","LiveCode","LiveScript","Lua","Lucid","Lustre","LYaPAS","Lynx","M2001","M4","Machine code",
        "MAD (Michigan Algorithm Decoder)","MAD/I","Magik","Magma","make","Maple","MAPPER now part of BIS","MARK-IV now VISION:BUILDER",
        "Mary","MASM Microsoft Assembly x86","Mathematica","MATLAB","Maxima (see also Macsyma)","Max (Max Msp - Graphical Programming Environment)",
        "MaxScript internal language 3D Studio Max","Maya (MEL)","MDL","Mercury","Mesa","Metacard","Metafont","MetaL","Microcode","MicroScript",
        "MIIS","MillScript","MIMIC","Mirah","Miranda","MIVA Script","ML","Moby","Model 204","Modelica","Modula","Modula-2","Modula-3","Mohol",
        "MOO","Mortran","Mouse","MPD","MSIL - deprecated name for CIL","MSL","MUMPS","NASM","NATURAL","Napier88","Neko","Nemerle","nesC","NESL",
        "Net.Data","NetLogo","NetRexx","NewLISP","NEWP","Newspeak","NewtonScript","NGL","Nial","Nice","Nickle","NPL","Not eXactly C (NXC)",
        "Not Quite C (NQC)","NSIS","Nu","NWScript","NXT-G","o:XML","Oak","Oberon","Obix","OBJ2","Object Lisp","ObjectLOGO","Object REXX",
        "Object Pascal","Objective-C","Objective-J","Obliq","Obol","OCaml","occam","occam-π","Octave","OmniMark","Onyx","Opa","Opal","OpenCL",
        "OpenEdge ABL","OPL","OPS5","OptimJ","Orc","ORCA/Modula-2","Oriel","Orwell","Oxygene","Oz","ParaSail (programming language)","PARI/GP",
        "Pascal - ISO 7185","Pawn","PCASTL","PCF","PEARL","PeopleCode","Perl","PDL","PHP","Phrogram","Pico","Picolisp","Pict","Pike","PIKT",
        "PILOT","Pipelines","Pizza","PL-11","PL/0","PL/B","PL/C","PL/I - ISO 6160","PL/M","PL/P","PL/SQL","PL360","PLANC","Plankalkül","Planner",
        "PLEX","PLEXIL","Plus","POP-11","PostScript","PortablE","Powerhouse","PowerBuilder - 4GL GUI appl. generator from Sybase","PowerShell",
        "PPL","Processing","Processing.js","Prograph","PROIV","Prolog","PROMAL","Promela","PROSE modeling language","PROTEL","ProvideX","Pro*C",
        "Pure","Python","Q (equational programming language)","Q (programming language from Kx Systems)","Qalb","Qi","QtScript","QuakeC","QPL",
        "R++","Racket","RAPID","Rapira","Ratfiv","Ratfor","rc","REBOL","Red","Redcode","REFAL","Reia","Revolution","rex","REXX","Rlab","RobotC",
        "ROOP","RPG","RPL","RSL","RTL/2","Ruby","RuneScript","Rust","S2","S3","S-Lang","S-PLUS","SA-C","SabreTalk","SAIL","SALSA","SAM76","SAS",
        "SASL","Sather","Sawzall","SBL","Scala","Scheme","Scilab","Scratch","Script.NET","Sed","Seed7","Self","SenseTalk","SequenceL","SETL",
        "Shift Script","SIMPOL","SIMSCRIPT","Simula","Simulink","SISAL","SLIP","SMALL","Smalltalk","Small Basic","SML","SNOBOL(SPITBOL)",
        "Snowball","SOL","Span","SPARK","SPIN","SP/k","SPS","Squeak","Squirrel","SR","S/SL","Stackless Python","Starlogo","Strand","Stata",
        "Stateflow","Subtext","SuperCollider","SuperTalk","Swift (Apple programming language)","Swift (parallel scripting language)","SYMPL",
        "SyncCharts","SystemVerilog","TACL","TACPOL","TADS","TAL","Tcl","Tea","TECO","TELCOMP","TeX","TEX","TIE","Timber","TMG compiler-compiler",
        "Tom","TOM","Topspeed","TPU","Trac","TTM","T-SQL","TTCN","Turing","TUTOR","TXL","TypeScript","Turbo C++","Ubercode","UCSD Pascal","Umple",
        "Unicon","Uniface","UNITY","Unix shell","UnrealScript","Vala","VBA","VBScript","Verilog","VHDL","Visual Basic","Visual Basic .NET",
        "Visual DataFlex","Visual DialogScript","Visual Fortran","Visual FoxPro","Visual J++","- Visual J#","Visual Objects","Visual Prolog",
        "VSXu","Vvvv","WATFIV, WATFOR","WebDNA","WebQL","Windows PowerShell","Winbatch","Wolfram","Wyvern","X++","X#","X10","XBL",
        "XC (exploits XMOS architecture)","xHarbour","XL","Xojo","XOTcl","XPL","XPL0","XQuery","XSB","XSLT - See XPath","Yorick","YQL","Z notation",
        "Zeno","ZOPL","ZPL"
    );

    public static function progLanguage()
    {
        return static::randomElement(static::$progLanguages);
    }

    public static function getProgLanguages()
    {
        return self::$progLanguages;
    }


}