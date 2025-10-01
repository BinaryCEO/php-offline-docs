<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Interactive shell - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.interactive.php">
 <link rel="shorturl" href="https://www.php.net/commandline.interactive">
 <link rel="alternate" href="https://www.php.net/commandline.interactive" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.io-streams.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.webserver.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.interactive.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.interactive.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.interactive.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.interactive.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.interactive.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.interactive.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.interactive.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.interactive.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.interactive.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.interactive.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.interactive.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Interactive shell" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Interactive shell - Manual" />
<meta name="twitter:description" content="Interactive shell" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Interactive shell - Manual" />
<meta itemprop="description" content="Interactive shell" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Interactive shell" />

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
        <a href="features.commandline.webserver.php">
          Built-in web server &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.io-streams.php">
          &laquo; I/O streams        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.commandline.php'>Command line usage</a></li>      </ul>
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
            <option value='en/features.commandline.interactive.php' selected="selected">English</option>
            <option value='de/features.commandline.interactive.php'>German</option>
            <option value='es/features.commandline.interactive.php'>Spanish</option>
            <option value='fr/features.commandline.interactive.php'>French</option>
            <option value='it/features.commandline.interactive.php'>Italian</option>
            <option value='ja/features.commandline.interactive.php'>Japanese</option>
            <option value='pt_BR/features.commandline.interactive.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.interactive.php'>Russian</option>
            <option value='tr/features.commandline.interactive.php'>Turkish</option>
            <option value='uk/features.commandline.interactive.php'>Ukrainian</option>
            <option value='zh/features.commandline.interactive.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.interactive" class="section">
  <h2 class="title">Interactive shell</h2>

  <p class="para">
   The <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> provides an interactive shell using the
   <strong class="option unknown">-a</strong> option if PHP is compiled with the <strong class="option configure">--with-readline</strong> option.
   As of PHP 7.1.0 the interactive shell is also available on Windows, if the
   <a href="book.readline.php" class="link">readline extension</a> is enabled.
  </p>

  <p class="para">
   Using the interactive shell you are able to type PHP code and have it
   executed directly.
  </p>

  <div class="example" id="example-556">
   <p><strong>Example #1 Executing code using the interactive shell</strong></p>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ php -a
Interactive shell

php &gt; echo 5+8;
13
php &gt; function addTwo($n)
php &gt; {
php { return $n + 2;
php { }
php &gt; var_dump(addtwo(2));
int(4)
php &gt;</pre>
</div>
   </div>

  </div>

  <p class="para">
   The interactive shell also features tab completion for functions,
   constants, class names, variables, static method calls and class
   constants.
  </p>

  <div class="example" id="example-557">
   <p><strong>Example #2 Tab completion</strong></p>
   <div class="example-contents"><p>
    Pressing the tab key twice when there are multiple possible completions
    will result in a list of these completions:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; strp[TAB][TAB]
strpbrk   strpos    strptime  
php &gt; strp</pre>
</div>
   </div>

   <div class="example-contents"><p>
    When there is only one possible completion, pressing tab once will
    complete the rest on the same line:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; strpt[TAB]ime(</pre>
</div>
   </div>

   <div class="example-contents"><p>
    Completion will also work for names that have been defined
    during the current interactive shell session:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; $fooThisIsAReallyLongVariableName = 42;
php &gt; $foo[TAB]ThisIsAReallyLongVariableName</pre>
</div>
   </div>

  </div>

  <p class="simpara">
   The interactive shell stores your history which can be accessed using the up
   and down keys. The history is saved in the
   <var class="filename">~/.php_history</var> file.
   As of PHP 8.4.0, the path to the history file can be set using the
   <var class="envar">PHP_HISTFILE</var> environment variable.
  </p>

  <p class="para">
   The <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> provides
   the <var class="filename">php.ini</var> settings <code class="parameter">cli.pager</code> and
   <code class="parameter">cli.prompt</code>. The <code class="parameter">cli.pager</code>
   setting allows an external program (such as <var class="filename">less</var>) to
   act as a pager for the output instead of being displayed directly on the
   screen. The <code class="parameter">cli.prompt</code> setting makes it possible to
   change the <code class="literal">php &gt;</code> prompt.
  </p>

  <p class="para">
   It is also possible to set
   <var class="filename">php.ini</var> settings in the interactive shell using a shorthand notation.
  </p>

  <div class="example" id="example-558">
   <p><strong>Example #3 Setting <var class="filename">php.ini</var> settings in the interactive shell</strong></p>
   <div class="example-contents"><p>
    The <code class="parameter">cli.prompt</code> setting:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; #cli.prompt=hello world :&gt; 
hello world :&gt;</pre>
</div>
   </div>

   <div class="example-contents"><p>
    Using backticks it is possible to have PHP code executed in the prompt:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; #cli.prompt=`echo date(&#039;H:i:s&#039;);` php &gt; 
15:49:35 php &gt; echo &#039;hi&#039;;
hi
15:49:43 php &gt; sleep(2);
15:49:45 php &gt;</pre>
</div>
   </div>

   <div class="example-contents"><p>
    Setting the pager to <var class="filename">less</var>:
   </p></div>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php &gt; #cli.pager=less
php &gt; phpinfo();
(output displayed in less)
php &gt;</pre>
</div>
   </div>

  </div>

  <p class="para">
   The <code class="parameter">cli.prompt</code> setting supports a few escape
   sequences:
   <table class="doctable table">
    <caption><strong><code class="parameter">cli.prompt</code> escape sequences</strong></caption>
    
     <thead>
      <tr>
       <th>Sequence</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">\e</code></td>
       <td>
        Used for adding colors to the prompt. An example could be
        <code class="literal">\e[032m\v \e[031m\b \e[34m\&gt; \e[0m</code>
       </td>
      </tr>

      <tr>
       <td><code class="literal">\v</code></td>
       <td>The PHP version.</td>
      </tr>

      <tr>
       <td><code class="literal">\b</code></td>
       <td>
        Indicates which block PHP is in. For instance <code class="literal">/*</code> to
        indicate being inside a multi-line comment. The outer scope is denoted by
        <code class="literal">php</code>.
       </td>
      </tr>

      <tr>
       <td><code class="literal">\&gt;</code></td>
       <td>
        Indicates the prompt character. By default this is
        <code class="literal">&gt;</code>, but changes when the shell is inside an
        unterminated block or string. Possible characters are: <code class="literal">&#039; &quot; {
        ( &gt;</code>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Files included through <a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a> and <a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a> are parsed in
    this mode but with some restrictions - e.g. functions have to be
    defined before called.
   </p>
  </p></blockquote>

  <div class="section" id="features.commandline.interactive.mode">
   <h2 class="title">Interactive mode</h2>
   <p class="para">
    If the readline extension is not available, prior to PHP 8.1.0, invoking the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> with the
    <strong class="option unknown">-a</strong> option provided the interactive mode. In this mode, a
    complete PHP script is supposed to be given via STDIN, and after termination
    with
    <kbd class="keycombo">
     <kbd class="keycap">CTRL</kbd>
     +<kbd class="keycap">D</kbd>
    </kbd>
    (POSIX) or
    <kbd class="keycombo">
     <kbd class="keycap">CTRL</kbd>
     +<kbd class="keycap">Z</kbd>
    </kbd>
    followed by +<kbd class="keycap">ENTER</kbd> (Windows), this script is evaluated.
    This is basically the same as invoking the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> without the <strong class="option unknown">-a</strong>
    option.
   </p>
   <p class="para">
    As of PHP 8.1.0, invoking the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> with the <strong class="option unknown">-a</strong> option
    fails, if the readline extension is not available.
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.interactive%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.interactive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.interactive.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108006">  <div class="votes">
    <div id="Vu108006">
    <a href="/manual/vote-note.php?id=108006&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108006">
    <a href="/manual/vote-note.php?id=108006&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108006" title="83% like this...">
    176
    </div>
  </div>
  <a href="#108006" class="name">
  <strong class="user"><em>Ryan P</em></strong></a><a class="genanchor" href="#108006"> &para;</a><div class="date" title="2012-03-21 10:03"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108006">
<div class="phpcode"><code><span class="html">Interactive Shell and Interactive Mode are not the same thing, despite the similar names and functionality.<br /><br />If you type 'php -a' and get a response of 'Interactive Shell' followed by a 'php&gt;' prompt, you have interactive shell available (PHP was compiled with readline support). If instead you get a response of 'Interactive mode enabled', you DO NOT have interactive shell available and this article does not apply to you.<br /><br />You can also check 'php -m' and see if readline is listed in the output - if not, you don't have interactive shell.<br /><br />Interactive mode is essentially like running php with stdin as the file input. You just type code, and when you're done (Ctrl-D), php executes whatever you typed as if it were a normal PHP (PHTML) file - hence you start in interactive mode with '&lt;?php' in order to execute code.<br /><br />Interactive shell evaluates every expression as you complete it (with ; or }), reports errors without terminating execution, and supports standard shell functionality via readline (history, tab completion, etc). It's an enhanced version of interactive mode that is ONLY available if you have the required libraries, and is an actual PHP shell that interprets everything you type as PHP code - using '&lt;?php' will cause a parse error.<br /><br />Finally, if you're running on Windows, you're probably screwed. From what I'm seeing in other comments here, you don't have readline, and without readline there is no interactive shell.</span></code></div>
  </div>
 </div>
  <div class="note" id="105729">  <div class="votes">
    <div id="Vu105729">
    <a href="/manual/vote-note.php?id=105729&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105729">
    <a href="/manual/vote-note.php?id=105729&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105729" title="75% like this...">
    57
    </div>
  </div>
  <a href="#105729" class="name">
  <strong class="user"><em>spencer at aninternetpresence dot net</em></strong></a><a class="genanchor" href="#105729"> &para;</a><div class="date" title="2011-09-09 10:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105729">
<div class="phpcode"><code><span class="html">In Windows, press Enter after your ending PHP tag and then hit Ctrl-Z to denote the end-of-file:
<br />
<br />C:\&gt;php -a
<br />Interactive mode enabled
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="string">"Hello, world!"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>^Z
<br />Hello, world!
<br />
<br />You can use the up and down arrows in interactive mode to recall previous code you ran.</span></code></div>
  </div>
 </div>
  <div class="note" id="121614">  <div class="votes">
    <div id="Vu121614">
    <a href="/manual/vote-note.php?id=121614&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121614">
    <a href="/manual/vote-note.php?id=121614&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121614" title="68% like this...">
    13
    </div>
  </div>
  <a href="#121614" class="name">
  <strong class="user"><em>#linuxmint-es</em></strong></a><a class="genanchor" href="#121614"> &para;</a><div class="date" title="2017-09-06 02:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121614">
<div class="phpcode"><code><span class="html">For use interactive mode enabled on GNU/Linux on distros Debian/Ubuntu/LinuxMint you must install "php*-cli" and "php*-readline" packages from official repository.<br />Example:<br /> &gt;$sudo aptitude install php5-cli php5-readline<br /><br />After that you can use interactive mode.<br />Example:<br />~ $ php -a<br />Interactive mode enabled<br /><br />php &gt;echo "hola mundo!\n";<br />hola mundo!<br />php &gt;<br /><br />I hope somebody help it!</span></code></div>
  </div>
 </div>
  <div class="note" id="98520">  <div class="votes">
    <div id="Vu98520">
    <a href="/manual/vote-note.php?id=98520&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98520">
    <a href="/manual/vote-note.php?id=98520&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98520" title="63% like this...">
    13
    </div>
  </div>
  <a href="#98520" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98520"> &para;</a><div class="date" title="2010-06-20 12:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98520">
<div class="phpcode"><code><span class="html">Just a few more notes to add...<br /><br />1) Hitting return does literally mean "execute this command".  Semicolon to note end of line is still required.  Meaning, doing the following will produce a parse error:<br /><br />php &gt; print "test"<br />php &gt; print "asdf";<br /><br />Whereas doing the following is just fine:<br /><br />php &gt; print "test"<br />php &gt; ."asdf";<br /><br />2) Fatal errors may eject you from the shell:<br /><br />name@local:~$ php -a<br />php &gt; asdf();<br /><br />Fatal Error: call to undefined function...<br />name@local:~$<br /><br />3) User defined functions are not saved in history from shell session to shell session.<br /><br />4) Should be obvious, but to quit the shell, just type "quit" at the php prompt.<br /><br />5) In a sense, the shell interaction can be thought of as linearly following a regular php file, except it's live and dynamic.  If you define a function that you've already defined earlier in your current shell, you will receive a fatal "function already defined" error only upon entering that closing bracket.  And, although "including" a toolset of custom functions or a couple of script addon php files is rather handy, should you edit those files and wish to "reinclude" it again, you'll cause a fatal "function x already defined" error.</span></code></div>
  </div>
 </div>
  <div class="note" id="122503">  <div class="votes">
    <div id="Vu122503">
    <a href="/manual/vote-note.php?id=122503&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122503">
    <a href="/manual/vote-note.php?id=122503&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122503" title="61% like this...">
    3
    </div>
  </div>
  <a href="#122503" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#122503"> &para;</a><div class="date" title="2018-03-13 12:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122503">
<div class="phpcode"><code><span class="html">If you delete your "~/.php_history", you MUST re-create the file manually!<br /><br />Because after I deleted my history file, "php -a" (interactive mode) never saved any history anymore.<br /><br />It only started working after I ran "touch ~/.php_history" to create an empty file. From then on, PHP is saving history again!<br /><br />I thought this was a bit unusual. Normally, applications recreate their history files themselves. But just be aware of the fact that PHP works this way instead, guys and girls! :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="124558">  <div class="votes">
    <div id="Vu124558">
    <a href="/manual/vote-note.php?id=124558&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124558">
    <a href="/manual/vote-note.php?id=124558&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124558" title="57% like this...">
    2
    </div>
  </div>
  <a href="#124558" class="name">
  <strong class="user"><em>Gray</em></strong></a><a class="genanchor" href="#124558"> &para;</a><div class="date" title="2020-01-02 11:53"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124558">
<div class="phpcode"><code><span class="html">When adding colours, don't forget that PHP uses the same 'readline' as Bash does, so it has the same need to wrap all colour codes in special marker characters.<br /><br />If you simply add raw colour codes to the prompt, you will notice that long lines no longer get wrapped correctly -- Readline no longer knows how wide the prompt is.<br /><br />To fix this, you need to start each colour code with an '0x01' byte (aka Ctrl-A aka SOH) and end it with the '0x02' byte (aka Ctrl-B aka STX). There are no escapes for these -- you have to literally put the control characters in your php-cli.ini.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// cli.prompt = &lt;SOH&gt;\e[1m&lt;STX&gt; PHP! \&gt; &lt;SOH&gt;\e[m&lt;STX&gt;<br /><br /></span><span class="keyword">echo </span><span class="string">"cli.prompt = \x01\\e[1m\x02 PHP! \x01\\e[m\x02\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129386">  <div class="votes">
    <div id="Vu129386">
    <a href="/manual/vote-note.php?id=129386&amp;page=features.commandline.interactive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129386">
    <a href="/manual/vote-note.php?id=129386&amp;page=features.commandline.interactive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129386" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129386" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#129386"> &para;</a><div class="date" title="2024-04-08 08:51"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129386">
<div class="phpcode"><code><span class="html">Note that destructors will not be triggered when exiting interactive shell by any method. (Like CTRL + D, CTRL + Z or CTRL + C).<br /><br />Since the interactive shell is effectively a continuous runtime, the "end of script" condition is never met for a destructor to run. And exiting the interactive shell is not considered end of script but rather the end of interpreter process. And since the process is dead; it can't run the destructor.<br /><br />Therefore the only way for a destructor to run is that you remove all the references to the corresponding object. Like:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__destructor</span><span class="keyword">() {<br />        </span><span class="comment">// This will never run after ending PHP interactive shell session.<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br /></span><span class="comment">// This is the only way for the destructor to be able to run.<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; </span><span class="comment">// Or;<br /></span><span class="keyword">unset(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.commandline.interactive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.interactive.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.usage.php" title="Usage">Usage</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.io-streams.php" title="I/O streams">I/O streams</a>
                        </li>
                                                <li class="current">
                            <a href="features.commandline.interactive.php" title="Interactive shell">Interactive shell</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.webserver.php" title="Built-&#8203;in web server">Built-&#8203;in web server</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.ini.php" title="INI settings">INI settings</a>
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
