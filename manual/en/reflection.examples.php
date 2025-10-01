<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflection.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflection.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflection.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.reflection.php">
 <link rel="prev" href="https://www.php.net/manual/en/intro.reflection.php">
 <link rel="next" href="https://www.php.net/manual/en/reflection.extending.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflection.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflection.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflection.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflection.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflection.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflection.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflection.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflection.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflection.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflection.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflection.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="reflection.extending.php">
          Extending &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intro.reflection.php">
          &laquo; Introduction        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      </ul>
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
            <option value='en/reflection.examples.php' selected="selected">English</option>
            <option value='de/reflection.examples.php'>German</option>
            <option value='es/reflection.examples.php'>Spanish</option>
            <option value='fr/reflection.examples.php'>French</option>
            <option value='it/reflection.examples.php'>Italian</option>
            <option value='ja/reflection.examples.php'>Japanese</option>
            <option value='pt_BR/reflection.examples.php'>Brazilian Portuguese</option>
            <option value='ru/reflection.examples.php'>Russian</option>
            <option value='tr/reflection.examples.php'>Turkish</option>
            <option value='uk/reflection.examples.php'>Ukrainian</option>
            <option value='zh/reflection.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflection.examples" class="chapter">
 <h1 class="title">Examples</h1>

 <p class="para">
  Many examples exist within the Reflection documentation, typically
  within the __construct documentation for each class.
 </p>
 <div class="example" id="example-5464">
  <p><strong>Example #1 Reflection Example from Shell (a Terminal)</strong></p>
  <div class="example-contents">
<div class="annotation-interactive shellcode"><pre class="shellcode">$ php --rf strlen
$ php --rc finfo
$ php --re json
$ php --ri dom</pre>
</div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Function [ &lt;internal:Core&gt; function strlen ] {

  - Parameters [1] {
    Parameter #0 [ &lt;required&gt; $str ]
  }
}

Class [ &lt;internal:fileinfo&gt; class finfo ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ &lt;internal:fileinfo, ctor&gt; public method finfo ] {

      - Parameters [2] {
        Parameter #0 [ &lt;optional&gt; $options ]
        Parameter #1 [ &lt;optional&gt; $arg ]
      }
    }

    Method [ &lt;internal:fileinfo&gt; public method set_flags ] {

      - Parameters [1] {
        Parameter #0 [ &lt;required&gt; $options ]
      }
    }

    Method [ &lt;internal:fileinfo&gt; public method file ] {

      - Parameters [3] {
        Parameter #0 [ &lt;required&gt; $filename ]
        Parameter #1 [ &lt;optional&gt; $options ]
        Parameter #2 [ &lt;optional&gt; $context ]
      }
    }

    Method [ &lt;internal:fileinfo&gt; public method buffer ] {

      - Parameters [3] {
        Parameter #0 [ &lt;required&gt; $string ]
        Parameter #1 [ &lt;optional&gt; $options ]
        Parameter #2 [ &lt;optional&gt; $context ]
      }
    }
  }
}

Extension [ &lt;persistent&gt; extension #23 json version 1.2.1 ] {

  - Constants [10] {
    Constant [ integer JSON_HEX_TAG ] { 1 }
    Constant [ integer JSON_HEX_AMP ] { 2 }
    Constant [ integer JSON_HEX_APOS ] { 4 }
    Constant [ integer JSON_HEX_QUOT ] { 8 }
    Constant [ integer JSON_FORCE_OBJECT ] { 16 }
    Constant [ integer JSON_ERROR_NONE ] { 0 }
    Constant [ integer JSON_ERROR_DEPTH ] { 1 }
    Constant [ integer JSON_ERROR_STATE_MISMATCH ] { 2 }
    Constant [ integer JSON_ERROR_CTRL_CHAR ] { 3 }
    Constant [ integer JSON_ERROR_SYNTAX ] { 4 }
  }

  - Functions {
    Function [ &lt;internal:json&gt; function json_encode ] {

      - Parameters [2] {
        Parameter #0 [ &lt;required&gt; $value ]
        Parameter #1 [ &lt;optional&gt; $options ]
      }
    }
    Function [ &lt;internal:json&gt; function json_decode ] {

      - Parameters [3] {
        Parameter #0 [ &lt;required&gt; $json ]
        Parameter #1 [ &lt;optional&gt; $assoc ]
        Parameter #2 [ &lt;optional&gt; $depth ]
      }
    }
    Function [ &lt;internal:json&gt; function json_last_error ] {

      - Parameters [0] {
      }
    }
  }
}

dom

DOM/XML =&gt; enabled
DOM/XML API Version =&gt; 20031129
libxml Version =&gt; 2.7.3
HTML Support =&gt; enabled
XPath Support =&gt; enabled
XPointer Support =&gt; enabled
Schema Support =&gt; enabled
RelaxNG Support =&gt; enabled
</pre></div>
  </div>
 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflection.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflection.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflection.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90964">  <div class="votes">
    <div id="Vu90964">
    <a href="/manual/vote-note.php?id=90964&amp;page=reflection.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90964">
    <a href="/manual/vote-note.php?id=90964&amp;page=reflection.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90964" title="66% like this...">
    17
    </div>
  </div>
  <a href="#90964" class="name">
  <strong class="user"><em>Kovin</em></strong></a><a class="genanchor" href="#90964"> &para;</a><div class="date" title="2009-05-18 02:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90964">
<div class="phpcode"><code><span class="html">If you want to use method closures and don't have PHP 5.3, perhaps you find useful the following function
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">get_method_closure</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$method_name</span><span class="keyword">){
<br />        if(</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">),</span><span class="default">$method_name</span><span class="keyword">)){
<br />            </span><span class="default">$func            </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">( </span><span class="string">''</span><span class="keyword">,
<br />                            </span><span class="string">'
<br />                                $args            = func_get_args();
<br />                                static $object    = NULL;
<br />                                
<br />                                /*
<br />                                * Check if this function is being called to set the static $object, which 
<br />                                * containts scope information to invoke the method
<br />                                */
<br />                                if(is_null($object) &amp;&amp; count($args) &amp;&amp; get_class($args[0])=="'</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">).</span><span class="string">'"){
<br />                                    $object = $args[0];
<br />                                    return;
<br />                                }
<br />
<br />                                if(!is_null($object)){
<br />                                    return call_user_func_array(array($object,"'</span><span class="keyword">.</span><span class="default">$method_name</span><span class="keyword">.</span><span class="string">'"),$args);
<br />                                }else{
<br />                                    return FALSE;
<br />                                }'
<br />                            </span><span class="keyword">);
<br />            
<br />            </span><span class="comment">//Initialize static $object
<br />            </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);
<br />            
<br />            </span><span class="comment">//Return closure
<br />            </span><span class="keyword">return </span><span class="default">$func</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }        
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>Here is how you would use it:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">foo</span><span class="keyword">{
<br />    public function </span><span class="default">bar</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">){
<br />        return </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);
<br />    }
<br />}
<br />
<br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();
<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">get_method_closure</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">);
<br />echo </span><span class="default">$f</span><span class="keyword">(</span><span class="string">"BAR"</span><span class="keyword">);</span><span class="comment">//Prints 'bar'
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101585">  <div class="votes">
    <div id="Vu101585">
    <a href="/manual/vote-note.php?id=101585&amp;page=reflection.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101585">
    <a href="/manual/vote-note.php?id=101585&amp;page=reflection.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101585" title="67% like this...">
    11
    </div>
  </div>
  <a href="#101585" class="name">
  <strong class="user"><em>spectrum at bigmir dot net</em></strong></a><a class="genanchor" href="#101585"> &para;</a><div class="date" title="2010-12-28 02:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101585">
<div class="phpcode"><code><span class="html">Simple table generation using Reflection:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    public    </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Vasiliy'</span><span class="keyword">;<br />    public    </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Once upon a time'</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">B<br /></span><span class="keyword">{<br />    public    </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Had bought a cat'</span><span class="keyword">;<br />    public    </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'named Valentine'</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">grid<br /></span><span class="keyword">{<br />    public function </span><span class="default">build</span><span class="keyword">(  </span><span class="default">$dataSource</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">, </span><span class="default">$fields  </span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'&lt;table border="1"&gt;'</span><span class="keyword">;<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">make_head</span><span class="keyword">( </span><span class="default">$headers </span><span class="keyword">);<br />        <br />        foreach (</span><span class="default">$dataSource </span><span class="keyword">as </span><span class="default">$source</span><span class="keyword">):<br />            </span><span class="default">$class_name </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br />            if ( </span><span class="default">$class_name </span><span class="keyword">!= </span><span class="default">FALSE </span><span class="keyword">):<br />                </span><span class="default">$reflector </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br />                echo </span><span class="string">'Class "'</span><span class="keyword">. </span><span class="default">$class_name </span><span class="keyword">.</span><span class="string">'" found.&lt;br /&gt;'</span><span class="keyword">;<br />                </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">make_row</span><span class="keyword">( </span><span class="default">$reflector</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">, </span><span class="default">$source </span><span class="keyword">);<br />            endif;<br />        endforeach;<br />        <br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">'&lt;/table&gt;'</span><span class="keyword">;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />    <br />    private function </span><span class="default">make_head</span><span class="keyword">( </span><span class="default">$headers </span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'&lt;tr&gt;'</span><span class="keyword">;<br />        foreach ( </span><span class="default">$headers </span><span class="keyword">as </span><span class="default">$header</span><span class="keyword">):<br />            </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">"&lt;th&gt;</span><span class="default">$header</span><span class="string">&lt;/th&gt;"</span><span class="keyword">;<br />        endforeach;<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">'&lt;/tr&gt;'</span><span class="keyword">;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />    <br />    private function </span><span class="default">make_row</span><span class="keyword">( </span><span class="default">$reflector</span><span class="keyword">, </span><span class="default">$fields</span><span class="keyword">, </span><span class="default">$source </span><span class="keyword">)<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'&lt;tr&gt;'</span><span class="keyword">;<br />        foreach ( </span><span class="default">$fields </span><span class="keyword">as </span><span class="default">$field </span><span class="keyword">):<br />            if ( </span><span class="default">$reflector </span><span class="keyword">-&gt; </span><span class="default">hasProperty</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">) ):<br />                </span><span class="default">$property </span><span class="keyword">= </span><span class="default">$reflector </span><span class="keyword">-&gt; </span><span class="default">getProperty</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">);<br />                </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">'&lt;td&gt;'</span><span class="keyword">. </span><span class="default">$property </span><span class="keyword">-&gt; </span><span class="default">getValue</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">) .</span><span class="string">'&lt;/td&gt;'</span><span class="keyword">;<br />            endif;<br />        endforeach;<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">'&lt;/tr&gt;'</span><span class="keyword">;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$A </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /></span><span class="default">$B </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br /></span><span class="default">$C </span><span class="keyword">= </span><span class="string">'Test'</span><span class="keyword">;<br /><br /></span><span class="default">$dataSource </span><span class="keyword">= array( </span><span class="default">$A</span><span class="keyword">, </span><span class="default">$B</span><span class="keyword">, </span><span class="default">$C </span><span class="keyword">);<br /></span><span class="default">$headers </span><span class="keyword">= array( </span><span class="string">'H1'</span><span class="keyword">, </span><span class="string">'H2' </span><span class="keyword">);<br /></span><span class="default">$fields </span><span class="keyword">= array( </span><span class="string">'name'</span><span class="keyword">, </span><span class="string">'text' </span><span class="keyword">);<br /><br /></span><span class="default">$grid </span><span class="keyword">= new </span><span class="default">grid</span><span class="keyword">;<br /></span><span class="default">$table </span><span class="keyword">= </span><span class="default">$grid </span><span class="keyword">-&gt; </span><span class="default">build</span><span class="keyword">( </span><span class="default">$dataSource</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">, </span><span class="default">$fields </span><span class="keyword">);<br />echo </span><span class="default">$table</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflection.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflection.examples.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.reflection.php">Reflection</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.reflection.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
                            <a href="reflection.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="reflection.extending.php" title="Extending">Extending</a>
                        </li>
                                                <li class="">
                            <a href="class.reflection.php" title="Reflection">Reflection</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclass.php" title="ReflectionClass">ReflectionClass</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionclassconstant.php" title="ReflectionClassConstant">ReflectionClassConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionconstant.php" title="ReflectionConstant">ReflectionConstant</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenum.php" title="ReflectionEnum">ReflectionEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumunitcase.php" title="ReflectionEnumUnitCase">ReflectionEnumUnitCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionenumbackedcase.php" title="ReflectionEnumBackedCase">ReflectionEnumBackedCase</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionzendextension.php" title="ReflectionZendExtension">ReflectionZendExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionextension.php" title="ReflectionExtension">ReflectionExtension</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunction.php" title="ReflectionFunction">ReflectionFunction</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfunctionabstract.php" title="ReflectionFunctionAbstract">ReflectionFunctionAbstract</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionmethod.php" title="ReflectionMethod">ReflectionMethod</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionnamedtype.php" title="ReflectionNamedType">ReflectionNamedType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionobject.php" title="ReflectionObject">ReflectionObject</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionparameter.php" title="ReflectionParameter">ReflectionParameter</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionproperty.php" title="ReflectionProperty">ReflectionProperty</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiontype.php" title="ReflectionType">ReflectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionuniontype.php" title="ReflectionUnionType">ReflectionUnionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectiongenerator.php" title="ReflectionGenerator">ReflectionGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionfiber.php" title="ReflectionFiber">ReflectionFiber</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionintersectiontype.php" title="ReflectionIntersectionType">ReflectionIntersectionType</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionreference.php" title="ReflectionReference">ReflectionReference</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionattribute.php" title="ReflectionAttribute">ReflectionAttribute</a>
                        </li>
                                                <li class="">
                            <a href="class.reflector.php" title="Reflector">Reflector</a>
                        </li>
                                                <li class="">
                            <a href="class.reflectionexception.php" title="ReflectionException">ReflectionException</a>
                        </li>
                                                <li class="">
                            <a href="enum.propertyhooktype.php" title="PropertyHookType">PropertyHookType</a>
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
