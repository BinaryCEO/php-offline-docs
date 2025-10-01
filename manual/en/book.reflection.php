<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Reflection - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="shorturl" href="https://www.php.net/reflection">
 <link rel="alternate" href="https://www.php.net/reflection" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.vartype.php">
 <link rel="prev" href="https://www.php.net/manual/en/quickhashintstringhash.update.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.reflection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.reflection.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.reflection.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.reflection.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.reflection.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.reflection.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.reflection.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.reflection.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.reflection.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.reflection.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.reflection.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.reflection.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reflection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Reflection - Manual" />
<meta name="twitter:description" content="Reflection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Reflection - Manual" />
<meta itemprop="description" content="Reflection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reflection" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="intro.reflection.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="quickhashintstringhash.update.php">
          &laquo; QuickHashIntStringHash::update        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/book.reflection.php' selected="selected">English</option>
            <option value='de/book.reflection.php'>German</option>
            <option value='es/book.reflection.php'>Spanish</option>
            <option value='fr/book.reflection.php'>French</option>
            <option value='it/book.reflection.php'>Italian</option>
            <option value='ja/book.reflection.php'>Japanese</option>
            <option value='pt_BR/book.reflection.php'>Brazilian Portuguese</option>
            <option value='ru/book.reflection.php'>Russian</option>
            <option value='tr/book.reflection.php'>Turkish</option>
            <option value='uk/book.reflection.php'>Ukrainian</option>
            <option value='zh/book.reflection.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.reflection" class="book">
 
 <h1 class="title">Reflection</h1>
 

 

 







 







 




 




 




 



 



 



 



 




 




 




 




 




 




 




 




 




 




 




 




 



 



 




 




 




 




 




<ul class="chunklist chunklist_book"><li><a href="intro.reflection.php">Introduction</a></li><li><a href="reflection.examples.php">Examples</a></li><li><a href="reflection.extending.php">Extending</a></li><li><a href="class.reflection.php">Reflection</a> — The Reflection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflection.export.php">Reflection::export</a> — Exports</li><li><a href="reflection.getmodifiernames.php">Reflection::getModifierNames</a> — Gets modifier names</li></ul></li><li><a href="class.reflectionclass.php">ReflectionClass</a> — The ReflectionClass class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionclass.construct.php">ReflectionClass::__construct</a> — Constructs a ReflectionClass</li><li><a href="reflectionclass.export.php">ReflectionClass::export</a> — Exports a class</li><li><a href="reflectionclass.getattributes.php">ReflectionClass::getAttributes</a> — Gets Attributes</li><li><a href="reflectionclass.getconstant.php">ReflectionClass::getConstant</a> — Gets defined constant</li><li><a href="reflectionclass.getconstants.php">ReflectionClass::getConstants</a> — Gets constants</li><li><a href="reflectionclass.getconstructor.php">ReflectionClass::getConstructor</a> — Gets the constructor of the class</li><li><a href="reflectionclass.getdefaultproperties.php">ReflectionClass::getDefaultProperties</a> — Gets default properties</li><li><a href="reflectionclass.getdoccomment.php">ReflectionClass::getDocComment</a> — Gets doc comments</li><li><a href="reflectionclass.getendline.php">ReflectionClass::getEndLine</a> — Gets end line</li><li><a href="reflectionclass.getextension.php">ReflectionClass::getExtension</a> — Gets a ReflectionExtension object for the extension which defined the class</li><li><a href="reflectionclass.getextensionname.php">ReflectionClass::getExtensionName</a> — Gets the name of the extension which defined the class</li><li><a href="reflectionclass.getfilename.php">ReflectionClass::getFileName</a> — Gets the filename of the file in which the class has been defined</li><li><a href="reflectionclass.getinterfacenames.php">ReflectionClass::getInterfaceNames</a> — Gets the interface names</li><li><a href="reflectionclass.getinterfaces.php">ReflectionClass::getInterfaces</a> — Gets the interfaces</li><li><a href="reflectionclass.getlazyinitializer.php">ReflectionClass::getLazyInitializer</a> — Gets lazy initializer</li><li><a href="reflectionclass.getmethod.php">ReflectionClass::getMethod</a> — Gets a ReflectionMethod for a class method</li><li><a href="reflectionclass.getmethods.php">ReflectionClass::getMethods</a> — Gets an array of methods</li><li><a href="reflectionclass.getmodifiers.php">ReflectionClass::getModifiers</a> — Gets the class modifiers</li><li><a href="reflectionclass.getname.php">ReflectionClass::getName</a> — Gets class name</li><li><a href="reflectionclass.getnamespacename.php">ReflectionClass::getNamespaceName</a> — Gets namespace name</li><li><a href="reflectionclass.getparentclass.php">ReflectionClass::getParentClass</a> — Gets parent class</li><li><a href="reflectionclass.getproperties.php">ReflectionClass::getProperties</a> — Gets properties</li><li><a href="reflectionclass.getproperty.php">ReflectionClass::getProperty</a> — Gets a ReflectionProperty for a class's property</li><li><a href="reflectionclass.getreflectionconstant.php">ReflectionClass::getReflectionConstant</a> — Gets a ReflectionClassConstant for a class's constant</li><li><a href="reflectionclass.getreflectionconstants.php">ReflectionClass::getReflectionConstants</a> — Gets class constants</li><li><a href="reflectionclass.getshortname.php">ReflectionClass::getShortName</a> — Gets short name</li><li><a href="reflectionclass.getstartline.php">ReflectionClass::getStartLine</a> — Gets starting line number</li><li><a href="reflectionclass.getstaticproperties.php">ReflectionClass::getStaticProperties</a> — Gets static properties</li><li><a href="reflectionclass.getstaticpropertyvalue.php">ReflectionClass::getStaticPropertyValue</a> — Gets static property value</li><li><a href="reflectionclass.gettraitaliases.php">ReflectionClass::getTraitAliases</a> — Returns an array of trait aliases</li><li><a href="reflectionclass.gettraitnames.php">ReflectionClass::getTraitNames</a> — Returns an array of names of traits used by this class</li><li><a href="reflectionclass.gettraits.php">ReflectionClass::getTraits</a> — Returns an array of traits used by this class</li><li><a href="reflectionclass.hasconstant.php">ReflectionClass::hasConstant</a> — Checks if constant is defined</li><li><a href="reflectionclass.hasmethod.php">ReflectionClass::hasMethod</a> — Checks if method is defined</li><li><a href="reflectionclass.hasproperty.php">ReflectionClass::hasProperty</a> — Checks if property is defined</li><li><a href="reflectionclass.implementsinterface.php">ReflectionClass::implementsInterface</a> — Implements interface</li><li><a href="reflectionclass.initializelazyobject.php">ReflectionClass::initializeLazyObject</a> — Forces initialization of a lazy object</li><li><a href="reflectionclass.innamespace.php">ReflectionClass::inNamespace</a> — Checks if in namespace</li><li><a href="reflectionclass.isabstract.php">ReflectionClass::isAbstract</a> — Checks if class is abstract</li><li><a href="reflectionclass.isanonymous.php">ReflectionClass::isAnonymous</a> — Checks if class is anonymous</li><li><a href="reflectionclass.iscloneable.php">ReflectionClass::isCloneable</a> — Returns whether this class is cloneable</li><li><a href="reflectionclass.isenum.php">ReflectionClass::isEnum</a> — Returns whether this is an enum</li><li><a href="reflectionclass.isfinal.php">ReflectionClass::isFinal</a> — Checks if class is final</li><li><a href="reflectionclass.isinstance.php">ReflectionClass::isInstance</a> — Checks class for instance</li><li><a href="reflectionclass.isinstantiable.php">ReflectionClass::isInstantiable</a> — Checks if the class is instantiable</li><li><a href="reflectionclass.isinterface.php">ReflectionClass::isInterface</a> — Checks if the class is an interface</li><li><a href="reflectionclass.isinternal.php">ReflectionClass::isInternal</a> — Checks if class is defined internally by an extension, or the core</li><li><a href="reflectionclass.isiterable.php">ReflectionClass::isIterable</a> — Check whether this class is iterable</li><li><a href="reflectionclass.isiterateable.php">ReflectionClass::isIterateable</a> — Alias of ReflectionClass::isIterable</li><li><a href="reflectionclass.isreadonly.php">ReflectionClass::isReadOnly</a> — Checks if class is readonly</li><li><a href="reflectionclass.issubclassof.php">ReflectionClass::isSubclassOf</a> — Checks if a subclass</li><li><a href="reflectionclass.istrait.php">ReflectionClass::isTrait</a> — Returns whether this is a trait</li><li><a href="reflectionclass.isuninitializedlazyobject.php">ReflectionClass::isUninitializedLazyObject</a> — Checks if an object is lazy and uninitialized</li><li><a href="reflectionclass.isuserdefined.php">ReflectionClass::isUserDefined</a> — Checks if user defined</li><li><a href="reflectionclass.marklazyobjectasinitialized.php">ReflectionClass::markLazyObjectAsInitialized</a> — Marks a lazy object as initialized without calling the initializer or factory</li><li><a href="reflectionclass.newinstance.php">ReflectionClass::newInstance</a> — Creates a new class instance from given arguments</li><li><a href="reflectionclass.newinstanceargs.php">ReflectionClass::newInstanceArgs</a> — Creates a new class instance from given arguments</li><li><a href="reflectionclass.newinstancewithoutconstructor.php">ReflectionClass::newInstanceWithoutConstructor</a> — Creates a new class instance without invoking the constructor</li><li><a href="reflectionclass.newlazyghost.php">ReflectionClass::newLazyGhost</a> — Creates a new lazy ghost instance</li><li><a href="reflectionclass.newlazyproxy.php">ReflectionClass::newLazyProxy</a> — Creates a new lazy proxy instance</li><li><a href="reflectionclass.resetaslazyghost.php">ReflectionClass::resetAsLazyGhost</a> — Resets an object and marks it as lazy</li><li><a href="reflectionclass.resetaslazyproxy.php">ReflectionClass::resetAsLazyProxy</a> — Resets an object and marks it as lazy</li><li><a href="reflectionclass.setstaticpropertyvalue.php">ReflectionClass::setStaticPropertyValue</a> — Sets public static property value</li><li><a href="reflectionclass.tostring.php">ReflectionClass::__toString</a> — Returns the string representation of the ReflectionClass object</li></ul></li><li><a href="class.reflectionclassconstant.php">ReflectionClassConstant</a> — The ReflectionClassConstant class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionclassconstant.construct.php">ReflectionClassConstant::__construct</a> — Constructs a ReflectionClassConstant</li><li><a href="reflectionclassconstant.export.php">ReflectionClassConstant::export</a> — Export</li><li><a href="reflectionclassconstant.getattributes.php">ReflectionClassConstant::getAttributes</a> — Gets Attributes</li><li><a href="reflectionclassconstant.getdeclaringclass.php">ReflectionClassConstant::getDeclaringClass</a> — Gets declaring class</li><li><a href="reflectionclassconstant.getdoccomment.php">ReflectionClassConstant::getDocComment</a> — Gets doc comments</li><li><a href="reflectionclassconstant.getmodifiers.php">ReflectionClassConstant::getModifiers</a> — Gets the class constant modifiers</li><li><a href="reflectionclassconstant.getname.php">ReflectionClassConstant::getName</a> — Get name of the constant</li><li><a href="reflectionclassconstant.gettype.php">ReflectionClassConstant::getType</a> — Gets a class constant's type</li><li><a href="reflectionclassconstant.getvalue.php">ReflectionClassConstant::getValue</a> — Gets value</li><li><a href="reflectionclassconstant.hastype.php">ReflectionClassConstant::hasType</a> — Checks if class constant has a type</li><li><a href="reflectionclassconstant.isdeprecated.php">ReflectionClassConstant::isDeprecated</a> — Checks if deprecated</li><li><a href="reflectionclassconstant.isenumcase.php">ReflectionClassConstant::isEnumCase</a> — Checks if class constant is an Enum case</li><li><a href="reflectionclassconstant.isfinal.php">ReflectionClassConstant::isFinal</a> — Checks if class constant is final</li><li><a href="reflectionclassconstant.isprivate.php">ReflectionClassConstant::isPrivate</a> — Checks if class constant is private</li><li><a href="reflectionclassconstant.isprotected.php">ReflectionClassConstant::isProtected</a> — Checks if class constant is protected</li><li><a href="reflectionclassconstant.ispublic.php">ReflectionClassConstant::isPublic</a> — Checks if class constant is public</li><li><a href="reflectionclassconstant.tostring.php">ReflectionClassConstant::__toString</a> — Returns the string representation of the ReflectionClassConstant object</li></ul></li><li><a href="class.reflectionconstant.php">ReflectionConstant</a> — The ReflectionConstant class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionconstant.construct.php">ReflectionConstant::__construct</a> — Constructs a ReflectionConstant</li><li><a href="reflectionconstant.getextension.php">ReflectionConstant::getExtension</a> — Gets ReflectionExtension of the defining extension</li><li><a href="reflectionconstant.getextensionname.php">ReflectionConstant::getExtensionName</a> — Gets name of the defining extension</li><li><a href="reflectionconstant.getfilename.php">ReflectionConstant::getFileName</a> — Gets name of the defining file</li><li><a href="reflectionconstant.getname.php">ReflectionConstant::getName</a> — Gets name</li><li><a href="reflectionconstant.getnamespacename.php">ReflectionConstant::getNamespaceName</a> — Gets namespace name</li><li><a href="reflectionconstant.getshortname.php">ReflectionConstant::getShortName</a> — Gets short name</li><li><a href="reflectionconstant.getvalue.php">ReflectionConstant::getValue</a> — Gets value</li><li><a href="reflectionconstant.isdeprecated.php">ReflectionConstant::isDeprecated</a> — Checks if deprecated</li><li><a href="reflectionconstant.tostring.php">ReflectionConstant::__toString</a> — Returns string representation</li></ul></li><li><a href="class.reflectionenum.php">ReflectionEnum</a> — The ReflectionEnum class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionenum.construct.php">ReflectionEnum::__construct</a> — Instantiates a ReflectionEnum object</li><li><a href="reflectionenum.getbackingtype.php">ReflectionEnum::getBackingType</a> — Gets the backing type of an Enum, if any</li><li><a href="reflectionenum.getcase.php">ReflectionEnum::getCase</a> — Returns a specific case of an Enum</li><li><a href="reflectionenum.getcases.php">ReflectionEnum::getCases</a> — Returns a list of all cases on an Enum</li><li><a href="reflectionenum.hascase.php">ReflectionEnum::hasCase</a> — Checks for a case on an Enum</li><li><a href="reflectionenum.isbacked.php">ReflectionEnum::isBacked</a> — Determines if an Enum is a Backed Enum</li></ul></li><li><a href="class.reflectionenumunitcase.php">ReflectionEnumUnitCase</a> — The ReflectionEnumUnitCase class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionenumunitcase.construct.php">ReflectionEnumUnitCase::__construct</a> — Instantiates a ReflectionEnumUnitCase object</li><li><a href="reflectionenumunitcase.getenum.php">ReflectionEnumUnitCase::getEnum</a> — Gets the reflection of the enum of this case</li><li><a href="reflectionenumunitcase.getvalue.php">ReflectionEnumUnitCase::getValue</a> — Gets the enum case object described by this reflection object</li></ul></li><li><a href="class.reflectionenumbackedcase.php">ReflectionEnumBackedCase</a> — The ReflectionEnumBackedCase class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionenumbackedcase.construct.php">ReflectionEnumBackedCase::__construct</a> — Instantiates a ReflectionEnumBackedCase object</li><li><a href="reflectionenumbackedcase.getbackingvalue.php">ReflectionEnumBackedCase::getBackingValue</a> — Gets the scalar value backing this Enum case</li></ul></li><li><a href="class.reflectionzendextension.php">ReflectionZendExtension</a> — The ReflectionZendExtension class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionzendextension.clone.php">ReflectionZendExtension::__clone</a> — Clone handler</li><li><a href="reflectionzendextension.construct.php">ReflectionZendExtension::__construct</a> — Constructs a ReflectionZendExtension object</li><li><a href="reflectionzendextension.export.php">ReflectionZendExtension::export</a> — Export</li><li><a href="reflectionzendextension.getauthor.php">ReflectionZendExtension::getAuthor</a> — Gets author</li><li><a href="reflectionzendextension.getcopyright.php">ReflectionZendExtension::getCopyright</a> — Gets copyright</li><li><a href="reflectionzendextension.getname.php">ReflectionZendExtension::getName</a> — Gets name</li><li><a href="reflectionzendextension.geturl.php">ReflectionZendExtension::getURL</a> — Gets URL</li><li><a href="reflectionzendextension.getversion.php">ReflectionZendExtension::getVersion</a> — Gets version</li><li><a href="reflectionzendextension.tostring.php">ReflectionZendExtension::__toString</a> — To string handler</li></ul></li><li><a href="class.reflectionextension.php">ReflectionExtension</a> — The ReflectionExtension class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionextension.clone.php">ReflectionExtension::__clone</a> — Clones</li><li><a href="reflectionextension.construct.php">ReflectionExtension::__construct</a> — Constructs a ReflectionExtension</li><li><a href="reflectionextension.export.php">ReflectionExtension::export</a> — Export</li><li><a href="reflectionextension.getclasses.php">ReflectionExtension::getClasses</a> — Gets classes</li><li><a href="reflectionextension.getclassnames.php">ReflectionExtension::getClassNames</a> — Gets class names</li><li><a href="reflectionextension.getconstants.php">ReflectionExtension::getConstants</a> — Gets constants</li><li><a href="reflectionextension.getdependencies.php">ReflectionExtension::getDependencies</a> — Gets dependencies</li><li><a href="reflectionextension.getfunctions.php">ReflectionExtension::getFunctions</a> — Gets extension functions</li><li><a href="reflectionextension.getinientries.php">ReflectionExtension::getINIEntries</a> — Gets extension ini entries</li><li><a href="reflectionextension.getname.php">ReflectionExtension::getName</a> — Gets extension name</li><li><a href="reflectionextension.getversion.php">ReflectionExtension::getVersion</a> — Gets extension version</li><li><a href="reflectionextension.info.php">ReflectionExtension::info</a> — Print extension info</li><li><a href="reflectionextension.ispersistent.php">ReflectionExtension::isPersistent</a> — Returns whether this extension is persistent</li><li><a href="reflectionextension.istemporary.php">ReflectionExtension::isTemporary</a> — Returns whether this extension is temporary</li><li><a href="reflectionextension.tostring.php">ReflectionExtension::__toString</a> — To string</li></ul></li><li><a href="class.reflectionfunction.php">ReflectionFunction</a> — The ReflectionFunction class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionfunction.construct.php">ReflectionFunction::__construct</a> — Constructs a ReflectionFunction object</li><li><a href="reflectionfunction.export.php">ReflectionFunction::export</a> — Exports function</li><li><a href="reflectionfunction.getclosure.php">ReflectionFunction::getClosure</a> — Returns a dynamically created closure for the function</li><li><a href="reflectionfunction.invoke.php">ReflectionFunction::invoke</a> — Invokes function</li><li><a href="reflectionfunction.invokeargs.php">ReflectionFunction::invokeArgs</a> — Invokes function args</li><li><a href="reflectionfunction.isanonymous.php">ReflectionFunction::isAnonymous</a> — Checks if a function is anonymous</li><li><a href="reflectionfunction.isdisabled.php">ReflectionFunction::isDisabled</a> — Checks if function is disabled</li><li><a href="reflectionfunction.tostring.php">ReflectionFunction::__toString</a> — Returns the string representation of the ReflectionFunction object</li></ul></li><li><a href="class.reflectionfunctionabstract.php">ReflectionFunctionAbstract</a> — The ReflectionFunctionAbstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionfunctionabstract.clone.php">ReflectionFunctionAbstract::__clone</a> — Clones function</li><li><a href="reflectionfunctionabstract.getattributes.php">ReflectionFunctionAbstract::getAttributes</a> — Gets Attributes</li><li><a href="reflectionfunctionabstract.getclosurecalledclass.php">ReflectionFunctionAbstract::getClosureCalledClass</a> — Returns the class corresponding to static:: inside a closure</li><li><a href="reflectionfunctionabstract.getclosurescopeclass.php">ReflectionFunctionAbstract::getClosureScopeClass</a> — Returns the class corresponding to the scope inside a closure</li><li><a href="reflectionfunctionabstract.getclosurethis.php">ReflectionFunctionAbstract::getClosureThis</a> — Returns the object which corresponds to $this inside a closure</li><li><a href="reflectionfunctionabstract.getclosureusedvariables.php">ReflectionFunctionAbstract::getClosureUsedVariables</a> — Returns an array of the used variables in the Closure</li><li><a href="reflectionfunctionabstract.getdoccomment.php">ReflectionFunctionAbstract::getDocComment</a> — Gets doc comment</li><li><a href="reflectionfunctionabstract.getendline.php">ReflectionFunctionAbstract::getEndLine</a> — Gets end line number</li><li><a href="reflectionfunctionabstract.getextension.php">ReflectionFunctionAbstract::getExtension</a> — Gets extension info</li><li><a href="reflectionfunctionabstract.getextensionname.php">ReflectionFunctionAbstract::getExtensionName</a> — Gets extension name</li><li><a href="reflectionfunctionabstract.getfilename.php">ReflectionFunctionAbstract::getFileName</a> — Gets file name</li><li><a href="reflectionfunctionabstract.getname.php">ReflectionFunctionAbstract::getName</a> — Gets function name</li><li><a href="reflectionfunctionabstract.getnamespacename.php">ReflectionFunctionAbstract::getNamespaceName</a> — Gets namespace name</li><li><a href="reflectionfunctionabstract.getnumberofparameters.php">ReflectionFunctionAbstract::getNumberOfParameters</a> — Gets number of parameters</li><li><a href="reflectionfunctionabstract.getnumberofrequiredparameters.php">ReflectionFunctionAbstract::getNumberOfRequiredParameters</a> — Gets number of required parameters</li><li><a href="reflectionfunctionabstract.getparameters.php">ReflectionFunctionAbstract::getParameters</a> — Gets parameters</li><li><a href="reflectionfunctionabstract.getreturntype.php">ReflectionFunctionAbstract::getReturnType</a> — Gets the specified return type of a function</li><li><a href="reflectionfunctionabstract.getshortname.php">ReflectionFunctionAbstract::getShortName</a> — Gets function short name</li><li><a href="reflectionfunctionabstract.getstartline.php">ReflectionFunctionAbstract::getStartLine</a> — Gets starting line number</li><li><a href="reflectionfunctionabstract.getstaticvariables.php">ReflectionFunctionAbstract::getStaticVariables</a> — Gets static variables</li><li><a href="reflectionfunctionabstract.gettentativereturntype.php">ReflectionFunctionAbstract::getTentativeReturnType</a> — Returns the tentative return type associated with the function</li><li><a href="reflectionfunctionabstract.hasreturntype.php">ReflectionFunctionAbstract::hasReturnType</a> — Checks if the function has a specified return type</li><li><a href="reflectionfunctionabstract.hastentativereturntype.php">ReflectionFunctionAbstract::hasTentativeReturnType</a> — Returns whether the function has a tentative return type</li><li><a href="reflectionfunctionabstract.innamespace.php">ReflectionFunctionAbstract::inNamespace</a> — Checks if function in namespace</li><li><a href="reflectionfunctionabstract.isclosure.php">ReflectionFunctionAbstract::isClosure</a> — Checks if closure</li><li><a href="reflectionfunctionabstract.isdeprecated.php">ReflectionFunctionAbstract::isDeprecated</a> — Checks if deprecated</li><li><a href="reflectionfunctionabstract.isgenerator.php">ReflectionFunctionAbstract::isGenerator</a> — Returns whether this function is a generator</li><li><a href="reflectionfunctionabstract.isinternal.php">ReflectionFunctionAbstract::isInternal</a> — Checks if is internal</li><li><a href="reflectiofunctionabstract.isstatic.php">ReflectionFunctionAbstract::isStatic</a> — Checks if the function is static</li><li><a href="reflectionfunctionabstract.isuserdefined.php">ReflectionFunctionAbstract::isUserDefined</a> — Checks if user defined</li><li><a href="reflectionfunctionabstract.isvariadic.php">ReflectionFunctionAbstract::isVariadic</a> — Checks if the function is variadic</li><li><a href="reflectionfunctionabstract.returnsreference.php">ReflectionFunctionAbstract::returnsReference</a> — Checks if returns reference</li><li><a href="reflectionfunctionabstract.tostring.php">ReflectionFunctionAbstract::__toString</a> — Returns the string representation of the ReflectionFunctionAbstract object</li></ul></li><li><a href="class.reflectionmethod.php">ReflectionMethod</a> — The ReflectionMethod class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionmethod.construct.php">ReflectionMethod::__construct</a> — Constructs a ReflectionMethod</li><li><a href="reflectionmethod.createfrommethodname.php">ReflectionMethod::createFromMethodName</a> — Creates a new ReflectionMethod</li><li><a href="reflectionmethod.export.php">ReflectionMethod::export</a> — Export a reflection method</li><li><a href="reflectionmethod.getclosure.php">ReflectionMethod::getClosure</a> — Returns a dynamically created closure for the method</li><li><a href="reflectionmethod.getdeclaringclass.php">ReflectionMethod::getDeclaringClass</a> — Gets declaring class for the reflected method</li><li><a href="reflectionmethod.getmodifiers.php">ReflectionMethod::getModifiers</a> — Gets the method modifiers</li><li><a href="reflectionmethod.getprototype.php">ReflectionMethod::getPrototype</a> — Gets the method prototype (if there is one)</li><li><a href="reflectionmethod.hasprototype.php">ReflectionMethod::hasPrototype</a> — Returns whether a method has a prototype</li><li><a href="reflectionmethod.invoke.php">ReflectionMethod::invoke</a> — Invoke</li><li><a href="reflectionmethod.invokeargs.php">ReflectionMethod::invokeArgs</a> — Invoke args</li><li><a href="reflectionmethod.isabstract.php">ReflectionMethod::isAbstract</a> — Checks if method is abstract</li><li><a href="reflectionmethod.isconstructor.php">ReflectionMethod::isConstructor</a> — Checks if method is a constructor</li><li><a href="reflectionmethod.isdestructor.php">ReflectionMethod::isDestructor</a> — Checks if method is a destructor</li><li><a href="reflectionmethod.isfinal.php">ReflectionMethod::isFinal</a> — Checks if method is final</li><li><a href="reflectionmethod.isprivate.php">ReflectionMethod::isPrivate</a> — Checks if method is private</li><li><a href="reflectionmethod.isprotected.php">ReflectionMethod::isProtected</a> — Checks if method is protected</li><li><a href="reflectionmethod.ispublic.php">ReflectionMethod::isPublic</a> — Checks if method is public</li><li><a href="reflectionmethod.setaccessible.php">ReflectionMethod::setAccessible</a> — Set method accessibility</li><li><a href="reflectionmethod.tostring.php">ReflectionMethod::__toString</a> — Returns the string representation of the Reflection method object</li></ul></li><li><a href="class.reflectionnamedtype.php">ReflectionNamedType</a> — The ReflectionNamedType class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionnamedtype.getname.php">ReflectionNamedType::getName</a> — Get the name of the type as a string</li><li><a href="reflectionnamedtype.isbuiltin.php">ReflectionNamedType::isBuiltin</a> — Checks if it is a built-in type</li></ul></li><li><a href="class.reflectionobject.php">ReflectionObject</a> — The ReflectionObject class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionobject.construct.php">ReflectionObject::__construct</a> — Constructs a ReflectionObject</li><li><a href="reflectionobject.export.php">ReflectionObject::export</a> — Export</li></ul></li><li><a href="class.reflectionparameter.php">ReflectionParameter</a> — The ReflectionParameter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionparameter.allowsnull.php">ReflectionParameter::allowsNull</a> — Checks if null is allowed</li><li><a href="reflectionparameter.canbepassedbyvalue.php">ReflectionParameter::canBePassedByValue</a> — Returns whether this parameter can be passed by value</li><li><a href="reflectionparameter.clone.php">ReflectionParameter::__clone</a> — Clone</li><li><a href="reflectionparameter.construct.php">ReflectionParameter::__construct</a> — Construct</li><li><a href="reflectionparameter.export.php">ReflectionParameter::export</a> — Exports</li><li><a href="reflectionparameter.getattributes.php">ReflectionParameter::getAttributes</a> — Gets Attributes</li><li><a href="reflectionparameter.getclass.php">ReflectionParameter::getClass</a> — Get a ReflectionClass object for the parameter being reflected or null</li><li><a href="reflectionparameter.getdeclaringclass.php">ReflectionParameter::getDeclaringClass</a> — Gets declaring class</li><li><a href="reflectionparameter.getdeclaringfunction.php">ReflectionParameter::getDeclaringFunction</a> — Gets declaring function</li><li><a href="reflectionparameter.getdefaultvalue.php">ReflectionParameter::getDefaultValue</a> — Gets default parameter value</li><li><a href="reflectionparameter.getdefaultvalueconstantname.php">ReflectionParameter::getDefaultValueConstantName</a> — Returns the default value's constant name if default value is constant or null</li><li><a href="reflectionparameter.getname.php">ReflectionParameter::getName</a> — Gets parameter name</li><li><a href="reflectionparameter.getposition.php">ReflectionParameter::getPosition</a> — Gets parameter position</li><li><a href="reflectionparameter.gettype.php">ReflectionParameter::getType</a> — Gets a parameter's type</li><li><a href="reflectionparameter.hastype.php">ReflectionParameter::hasType</a> — Checks if parameter has a type</li><li><a href="reflectionparameter.isarray.php">ReflectionParameter::isArray</a> — Checks if parameter expects an array</li><li><a href="reflectionparameter.iscallable.php">ReflectionParameter::isCallable</a> — Returns whether parameter MUST be callable</li><li><a href="reflectionparameter.isdefaultvalueavailable.php">ReflectionParameter::isDefaultValueAvailable</a> — Checks if a default value is available</li><li><a href="reflectionparameter.isdefaultvalueconstant.php">ReflectionParameter::isDefaultValueConstant</a> — Returns whether the default value of this parameter is a constant</li><li><a href="reflectionparameter.isoptional.php">ReflectionParameter::isOptional</a> — Checks if optional</li><li><a href="reflectionparameter.ispassedbyreference.php">ReflectionParameter::isPassedByReference</a> — Checks if passed by reference</li><li><a href="reflectionparameter.ispromoted.php">ReflectionParameter::isPromoted</a> — Checks if a parameter is promoted to a property</li><li><a href="reflectionparameter.isvariadic.php">ReflectionParameter::isVariadic</a> — Checks if the parameter is variadic</li><li><a href="reflectionparameter.tostring.php">ReflectionParameter::__toString</a> — To string</li></ul></li><li><a href="class.reflectionproperty.php">ReflectionProperty</a> — The ReflectionProperty class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionproperty.clone.php">ReflectionProperty::__clone</a> — Clone</li><li><a href="reflectionproperty.construct.php">ReflectionProperty::__construct</a> — Construct a ReflectionProperty object</li><li><a href="reflectionproperty.export.php">ReflectionProperty::export</a> — Export</li><li><a href="reflectionproperty.getattributes.php">ReflectionProperty::getAttributes</a> — Gets Attributes</li><li><a href="reflectionproperty.getdeclaringclass.php">ReflectionProperty::getDeclaringClass</a> — Gets declaring class</li><li><a href="reflectionproperty.getdefaultvalue.php">ReflectionProperty::getDefaultValue</a> — Returns the default value declared for a property</li><li><a href="reflectionproperty.getdoccomment.php">ReflectionProperty::getDocComment</a> — Gets the property doc comment</li><li><a href="reflectionproperty.gethook.php">ReflectionProperty::getHook</a> — Returns a reflection object for a specified hook</li><li><a href="reflectionproperty.gethooks.php">ReflectionProperty::getHooks</a> — Returns an array of all hooks on this property</li><li><a href="reflectionproperty.getmodifiers.php">ReflectionProperty::getModifiers</a> — Gets the property modifiers</li><li><a href="reflectionproperty.getname.php">ReflectionProperty::getName</a> — Gets property name</li><li><a href="reflectionproperty.getrawvalue.php">ReflectionProperty::getRawValue</a> — Returns the value of a property, bypassing a get hook if defined</li><li><a href="reflectionproperty.getsettabletype.php">ReflectionProperty::getSettableType</a> — Returns the parameter type of a setter hook</li><li><a href="reflectionproperty.gettype.php">ReflectionProperty::getType</a> — Gets a property's type</li><li><a href="reflectionproperty.getvalue.php">ReflectionProperty::getValue</a> — Gets value</li><li><a href="reflectionproperty.hasdefaultvalue.php">ReflectionProperty::hasDefaultValue</a> — Checks if property has a default value declared</li><li><a href="reflectionproperty.hashook.php">ReflectionProperty::hasHook</a> — Returns whether the property has a given hook defined</li><li><a href="reflectionproperty.hashooks.php">ReflectionProperty::hasHooks</a> — Returns whether the property has any hooks defined</li><li><a href="reflectionproperty.hastype.php">ReflectionProperty::hasType</a> — Checks if property has a type</li><li><a href="reflectionproperty.isabstract.php">ReflectionProperty::isAbstract</a> — Determines if a property is abstract</li><li><a href="reflectionproperty.isdefault.php">ReflectionProperty::isDefault</a> — Checks if property is a default property</li><li><a href="reflectionproperty.isdynamic.php">ReflectionProperty::isDynamic</a> — Checks if property is a dynamic property</li><li><a href="reflectionproperty.isfinal.php">ReflectionProperty::isFinal</a> — Determines if this property is final or not</li><li><a href="reflectionproperty.isinitialized.php">ReflectionProperty::isInitialized</a> — Checks whether a property is initialized</li><li><a href="reflectionproperty.islazy.php">ReflectionProperty::isLazy</a> — Checks whether a property is lazy</li><li><a href="reflectionproperty.isprivate.php">ReflectionProperty::isPrivate</a> — Checks if property is private</li><li><a href="reflectionproperty.isprivateset.php">ReflectionProperty::isPrivateSet</a> — Checks if property is private for writing</li><li><a href="reflectionproperty.ispromoted.php">ReflectionProperty::isPromoted</a> — Checks if property is promoted</li><li><a href="reflectionproperty.isprotected.php">ReflectionProperty::isProtected</a> — Checks if property is protected</li><li><a href="reflectionproperty.isprotectedset.php">ReflectionProperty::isProtectedSet</a> — Checks whether the property is protected for writing</li><li><a href="reflectionproperty.ispublic.php">ReflectionProperty::isPublic</a> — Checks if property is public</li><li><a href="reflectionproperty.isreadonly.php">ReflectionProperty::isReadOnly</a> — Checks if property is readonly</li><li><a href="reflectionproperty.isstatic.php">ReflectionProperty::isStatic</a> — Checks if property is static</li><li><a href="reflectionproperty.isvirtual.php">ReflectionProperty::isVirtual</a> — Determines if a property is virtual</li><li><a href="reflectionproperty.setaccessible.php">ReflectionProperty::setAccessible</a> — Set property accessibility</li><li><a href="reflectionproperty.setrawvalue.php">ReflectionProperty::setRawValue</a> — Sets the value of a property, bypassing a set hook if defined</li><li><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php">ReflectionProperty::setRawValueWithoutLazyInitialization</a> — Set raw property value without triggering lazy initialization</li><li><a href="reflectionproperty.setvalue.php">ReflectionProperty::setValue</a> — Set property value</li><li><a href="reflectionproperty.skiplazyinitialization.php">ReflectionProperty::skipLazyInitialization</a> — Marks property as non-lazy</li><li><a href="reflectionproperty.tostring.php">ReflectionProperty::__toString</a> — To string</li></ul></li><li><a href="class.reflectiontype.php">ReflectionType</a> — The ReflectionType class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectiontype.allowsnull.php">ReflectionType::allowsNull</a> — Checks if null is allowed</li><li><a href="reflectiontype.tostring.php">ReflectionType::__toString</a> — To string</li></ul></li><li><a href="class.reflectionuniontype.php">ReflectionUnionType</a> — The ReflectionUnionType class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionuniontype.gettypes.php">ReflectionUnionType::getTypes</a> — Returns the types included in the union type</li></ul></li><li><a href="class.reflectiongenerator.php">ReflectionGenerator</a> — The ReflectionGenerator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectiongenerator.construct.php">ReflectionGenerator::__construct</a> — Constructs a ReflectionGenerator object</li><li><a href="reflectiongenerator.getexecutingfile.php">ReflectionGenerator::getExecutingFile</a> — Gets the file name of the currently executing generator</li><li><a href="reflectiongenerator.getexecutinggenerator.php">ReflectionGenerator::getExecutingGenerator</a> — Gets the executing Generator object</li><li><a href="reflectiongenerator.getexecutingline.php">ReflectionGenerator::getExecutingLine</a> — Gets the currently executing line of the generator</li><li><a href="reflectiongenerator.getfunction.php">ReflectionGenerator::getFunction</a> — Gets the function name of the generator</li><li><a href="reflectiongenerator.getthis.php">ReflectionGenerator::getThis</a> — Gets the $this value of the generator</li><li><a href="reflectiongenerator.gettrace.php">ReflectionGenerator::getTrace</a> — Gets the trace of the executing generator</li><li><a href="reflectiongenerator.isclosed.php">ReflectionGenerator::isClosed</a> — Checks if execution finished</li></ul></li><li><a href="class.reflectionfiber.php">ReflectionFiber</a> — The ReflectionFiber class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionfiber.construct.php">ReflectionFiber::__construct</a> — Constructs a ReflectionFiber object</li><li><a href="reflectionfiber.getcallable.php">ReflectionFiber::getCallable</a> — Gets the callable used to create the Fiber</li><li><a href="reflectionfiber.getexecutingfile.php">ReflectionFiber::getExecutingFile</a> — Get the file name of the current execution point</li><li><a href="reflectionfiber.getexecutingline.php">ReflectionFiber::getExecutingLine</a> — Get the line number of the current execution point</li><li><a href="reflectionfiber.getfiber.php">ReflectionFiber::getFiber</a> — Get the reflected Fiber instance</li><li><a href="reflectionfiber.gettrace.php">ReflectionFiber::getTrace</a> — Get the backtrace of the current execution point</li></ul></li><li><a href="class.reflectionintersectiontype.php">ReflectionIntersectionType</a> — The ReflectionIntersectionType class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionintersectiontype.gettypes.php">ReflectionIntersectionType::getTypes</a> — Returns the types included in the intersection type</li></ul></li><li><a href="class.reflectionreference.php">ReflectionReference</a> — The ReflectionReference class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionreference.construct.php">ReflectionReference::__construct</a> — Private constructor to disallow direct instantiation</li><li><a href="reflectionreference.fromarrayelement.php">ReflectionReference::fromArrayElement</a> — Create a ReflectionReference from an array element</li><li><a href="reflectionreference.getid.php">ReflectionReference::getId</a> — Get unique ID of a reference</li></ul></li><li><a href="class.reflectionattribute.php">ReflectionAttribute</a> — The ReflectionAttribute class<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflectionattribute.construct.php">ReflectionAttribute::__construct</a> — Private constructor to disallow direct instantiation</li><li><a href="reflectionattribute.getarguments.php">ReflectionAttribute::getArguments</a> — Gets arguments passed to attribute</li><li><a href="reflectionattribute.getname.php">ReflectionAttribute::getName</a> — Gets attribute name</li><li><a href="reflectionattribute.gettarget.php">ReflectionAttribute::getTarget</a> — Returns the target of the attribute as bitmask</li><li><a href="reflectionattribute.isrepeated.php">ReflectionAttribute::isRepeated</a> — Returns whether the attribute of this name has been repeated on a code element</li><li><a href="reflectionattribute.newinstance.php">ReflectionAttribute::newInstance</a> — Instantiates the attribute class represented by this ReflectionAttribute class and arguments</li></ul></li><li><a href="class.reflector.php">Reflector</a> — The Reflector interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="reflector.export.php">Reflector::export</a> — Exports</li></ul></li><li><a href="class.reflectionexception.php">ReflectionException</a> — The ReflectionException class</li><li><a href="enum.propertyhooktype.php">PropertyHookType</a> — The PropertyHookType Enum</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.reflection%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.reflection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.reflection.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.vartype.php">Variable and Type Related Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="book.classobj.php" title="Classes/Objects">Classes/Objects</a>
                        </li>
                                                <li class="">
                            <a href="book.ctype.php" title="Ctype">Ctype</a>
                        </li>
                                                <li class="">
                            <a href="book.filter.php" title="Filter">Filter</a>
                        </li>
                                                <li class="">
                            <a href="book.funchand.php" title="Function Handling">Function Handling</a>
                        </li>
                                                <li class="">
                            <a href="book.quickhash.php" title="Quickhash">Quickhash</a>
                        </li>
                                                <li class="current">
                            <a href="book.reflection.php" title="Reflection">Reflection</a>
                        </li>
                                                <li class="">
                            <a href="book.var.php" title="Variable handling">Variable handling</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
