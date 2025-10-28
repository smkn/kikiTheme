<script type="application/ld+json">
<?php if( is_front_page() || is_home() ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/",
      "url": "https://kiki-verb.co.jp/",
      "name": "株式会社キキバーブ | 東京都調布市を拠点に活動するWeb制作会社です。",
      "description": "株式会社キキバーブは、東京都調布市を拠点に、ウェブサイト制作、システム開発、ウェブサービス企画開発、アドバイザリー・技術顧問、自社サービス運営を行うWeb制作会社です。主にWordPressやLaravelを活用した実装を得意としており、お客様の課題解決に真摯に取り組み、99%のリピート率を誇ります。お困りのことがございましたら、お気軽にお問い合わせください。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // 企業情報
    {
      "@type": "Organization",
      "@id": "https://kiki-verb.co.jp/$organization",
      "name": "株式会社キキバーブ",
      "legalName": "株式会社キキバーブ（kiki verb Co., Ltd.）",
      "url": "https://kiki-verb.co.jp/",
      "logo": "https://kiki-verb.co.jp/wordpress/wp-content/themes/newKikiTheme/img/kikiverb_logo.png",
      "foundingDate": "2018-10-02",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.99",
        "reviewCount": "34"
      },
      "sameAs": [
        "https://x.com/kikiverb",
        "https://www.facebook.com/kikiverb"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "入間町1-35-56",
        "addressLocality": "調布市",
        "addressRegion": "東京都",
        "postalCode": "182-0004",
        "addressCountry": "JP"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "email": "info@kiki-verb.co.jp"
        },
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "url": "https://kiki-verb.co.jp/contact/"
        }
	  ]
    },
    // ウェブサイト制作サービス
    {
      "@type": "Service",
      "@id": "https://kiki-verb.co.jp/services/#service_webservice",
      "serviceType": "ウェブサイト制作",
      "name": "ウェブサイト制作サービス",
      "description": "お客様のビジネス目標達成を支援する、戦略的なウェブサイト制作を提供します。",
      "url": "https://kiki-verb.co.jp/services/#service_webservice",
      "provider": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // システム開発サービス
    {
      "@type": "Service",
      "@id": "https://kiki-verb.co.jp/service/#service_system",
      "serviceType": "システム開発",
      "name": "システム開発サービス",
      "description": "業務効率化、新規事業創出に貢献するカスタムシステムを開発します。",
      "url": "https://kiki-verb.co.jp/service/#service_system",
      "provider": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // ウェブサービス企画開発サービス
    {
      "@type": "Service",
      "@id": "https://kiki-verb.co.jp/service/#service_webservice",
      "serviceType": "ウェブサービス企画開発",
      "name": "ウェブサービス企画開発サービス",
      "description": "アイデア段階からローンチまで、ユーザーに価値を提供するウェブサービスの企画・開発をサポート。",
      "url": "https://kiki-verb.co.jp/service/#service_webservice",
      "provider": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // 技術顧問・アドバイザリーサービス
    {
      "@type": "Service",
      "@id": "https://kiki-verb.co.jp/service/#service_advisory",
      "serviceType": "技術顧問・アドバイザリー",
      "name": "技術顧問・アドバイザリーサービス",
      "description": "IT戦略立案から技術選定、開発チームの内製化支援まで、専門的な知見を提供します。",
      "url": "https://kiki-verb.co.jp/service/#service_advisory",
      "provider": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // 制作実績の一部抜粋
<?php $the_query = new WP_Query(array('posts_per_page' => 9, 'post_type' => 'works', 'orderby' => 'post_date', 'order' => 'DESC')); ?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
    {
      "@type": "WebSite",
      "name": "<?php echo get_the_title(); ?>",
      "url": "<?php echo get_permalink(); ?>",
      "image": "<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>",
      "description": "<?php echo get_the_title(); ?>の制作実績。<?php echo implode('、', array_map(fn($term) => $term->name, get_the_terms($post->ID, 'part'))); ?>を担当。",
      "creator": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
<?php endwhile; endif; wp_reset_postdata(); ?>
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        }
      ]
    }
  ]
}
<?php elseif( is_page( 'about-us' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/about-us/",
      "url": "https://kiki-verb.co.jp/about-us/",
      "name": "会社概要",
      "description": "株式会社キキバーブは、東京都調布市にある「リピート率99%」のWeb制作会社です。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "Organization",
      "@id": "https://kiki-verb.co.jp/$organization",
      "name": "株式会社キキバーブ",
      "legalName": "株式会社キキバーブ（kiki verb Co., Ltd.）",
      "url": "https://kiki-verb.co.jp/",
      "logo": "https://kiki-verb.co.jp/wordpress/wp-content/themes/newKikiTheme/img/kikiverb_logo.png",
      "foundingDate": "2018-10-02",
      "taxID": "7012401034536",
      "slogan": "ビジネス課題を技術の力で解決に導き、関わる全ての人と幸せを分かち合うために。",
      "areaServed": {
        "@type": "Place",
        "name": "日本全国"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.99",
        "reviewCount": "34"
      },
      "sameAs": [
        "https://x.com/kikiverb",
        "https://www.facebook.com/kikiverb"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "入間町1-35-56",
        "addressLocality": "調布市",
        "addressRegion": "東京都",
        "postalCode": "182-0004",
        "addressCountry": "JP"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "email": "info@kiki-verb.co.jp"
        },
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "url": "https://kiki-verb.co.jp/contact/"
        }
	  ]
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "会社概要",
          "item": "https://kiki-verb.co.jp/about-us/"
        }
      ]
    }
  ]
}
<?php elseif( is_page( 'services' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/services/",
      "url": "https://kiki-verb.co.jp/services/",
      "name": "提供サービス",
      "description": "多くの実務から得た知識と経験をもとに、システム設計からデザイン、サービス構築までワンストップでご提供します。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "Service",
      "serviceType": "Web制作",
      "provider": { "@id": "https://kiki-verb.co.jp/$organization" },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "提供サービス一覧",
        "url": "https://kiki-verb.co.jp/services/",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "ウェブサイト制作",
            "description": "お客様のビジネス目標達成を支援する、戦略的なウェブサイト制作を提供します。",
            "url": "https://kiki-verb.co.jp/services/#service_website",
            "itemListElement": {
              "@type": "Service",
              "name": "ウェブサイト制作",
              "serviceType": "Webサイト制作・リニューアル・SEO対策",
              "areaServed": "日本全国",
              "offers": {
                "@type": "Offer",
                "price": "見積もり制",
                "priceCurrency": "JPY",
                "url": "https://kiki-verb.co.jp/contact/"
              }
            }
          },
          {
            "@type": "OfferCatalog",
            "name": "システム開発",
            "description": "業務効率化、新規事業創出に貢献するカスタムシステムを開発します。",
            "url": "https://kiki-verb.co.jp/services/#service_system",
            "itemListElement": {
              "@type": "Service",
              "name": "システム開発",
              "serviceType": "Webシステム・業務アプリ開発・WordPressプラグイン開発",
              "areaServed": "日本全国",
              "offers": {
                "@type": "Offer",
                "price": "見積もり制",
                "priceCurrency": "JPY",
                "url": "https://kiki-verb.co.jp/contact/"
              }
            }
          },
          {
            "@type": "OfferCatalog",
            "name": "ウェブサービス企画開発",
            "description": "アイデア段階からローンチまで、ユーザーに価値を提供するウェブサービスの企画・開発をサポート。",
            "url": "https://kiki-verb.co.jp/services/#service_webservice",
            "itemListElement": {
              "@type": "Service",
              "name": "ウェブサービス企画開発",
              "serviceType": "Webサービス企画・MVP開発・事業立ち上げ支援",
              "areaServed": "日本全国",
              "offers": {
                "@type": "Offer",
                "price": "見積もり制",
                "priceCurrency": "JPY",
                "url": "https://kiki-verb.co.jp/contact/"
              }
            }
          },
          {
            "@type": "OfferCatalog",
            "name": "技術顧問・アドバイザリー",
            "description": "IT戦略立案から技術選定、開発チームの内製化支援まで、専門的な知見を提供します。",
            "url": "https://kiki-verb.co.jp/services/#service_advisory",
            "itemListElement": {
              "@type": "Service",
              "name": "技術顧問・アドバイザリー",
              "serviceType": "IT戦略支援・技術顧問・経営的技術アドバイス",
              "areaServed": "日本全国",
              "offers": {
                "@type": "Offer",
                "price": "見積もり制",
                "priceCurrency": "JPY",
                "url": "https://kiki-verb.co.jp/contact/"
              }
            }
          }
        ]
      }
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "提供サービス",
          "item": "https://kiki-verb.co.jp/services/"
        }
      ]
    }
  ]
}
<?php elseif( is_page( 'partner' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/partner/",
      "url": "https://kiki-verb.co.jp/partner/",
      "name": "ビジネスパートナー募集",
      "description": "社内外の垣根を越え、お互いの強みを活かしあえるビジネスパートナー様を募集しています。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "Organization",
      "@id": "https://kiki-verb.co.jp/$organization",
      "name": "株式会社キキバーブ",
      "email": "info@kiki-verb.co.jp",
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "email": "info@kiki-verb.co.jp"
        },
        {
          "@type": "ContactPoint",
          "contactType": "general information",
          "url": "https://kiki-verb.co.jp/contact/"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ビジネスパートナー募集",
        "url": "https://kiki-verb.co.jp/partner/",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "外注先をお探しの方",
            "description": "株式会社キキバーブでは、デザイン・コーディング・開発などを外注したい企業・制作会社・個人事業主の方を対象に、ビジネスパートナーを募集しています。報酬は案件単位、全国対応。",
            "areaServed": "JP",
			"price": "見積もり制",
            "url": "https://kiki-verb.co.jp/contact/?type=outsource"
          },
          {
            "@type": "Offer",
            "name": "リソースをご提供いただける方",
            "description": "外注対応可能なデザイナー、コーダー、エンジニア、ライターなどの方からのご連絡をお待ちしています。案件単位での協力体制を築けるパートナーを全国から募集しています。",
            "areaServed": "JP",
            "price": "見積もり制",
            "url": "https://kiki-verb.co.jp/resource/"
          }
        ]
      }
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "ビジネスパートナー募集",
          "item": "https://kiki-verb.co.jp/partner/"
        }
      ]
    }
  ]
}
<?php elseif( is_page( 'contact' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/contact/",
      "url": "https://kiki-verb.co.jp/contact/",
      "name": "お問い合わせ",
      "description": "お問い合わせ、お見積もりのご相談などはこちらまで。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "ContactPage",
      "@id": "https://kiki-verb.co.jp/contact/$contactpage",
      "url": "https://kiki-verb.co.jp/contact/",
      "name": "お問い合わせ",
      "description": "株式会社キキバーブへのお問い合わせ・ご相談・お見積もり依頼はこちらのフォームからお送りください。内容確認後、担当者よりご連絡いたします。",
      "mainEntity": {
        "@type": "Organization",
        "@id": "https://kiki-verb.co.jp/$organization",
        "name": "株式会社キキバーブ",
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "contactType": "案件のご相談・見積もり依頼",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "技術顧問・アドバイザリー",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "パートナー募集（外注先をお探しの方）",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "講演・執筆依頼",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "人材・採用",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "広報・取材",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "個人情報に関するお問い合わせ",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          },
          {
            "@type": "ContactPoint",
            "contactType": "その他のお問い合わせ",
            "availableLanguage": "ja",
            "url": "https://kiki-verb.co.jp/contact/"
          }
        ]
      }
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "お問い合わせ",
          "item": "https://kiki-verb.co.jp/contact/"
        }
      ]
    }
  ]
}
<?php elseif( is_page( 'resource' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/resource/",
      "url": "https://kiki-verb.co.jp/resource/",
      "name": "リソースご提供パートナー募集",
      "description": "リソースをご提供いただける方はこちらまで。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "OfferCatalog",
      "@id": "https://kiki-verb.co.jp/resource/$offerCatalog",
      "name": "リソースご提供パートナー募集",
      "description": "株式会社キキバーブでは、Web制作やシステム開発におけるビジネスパートナーとして協力していただける方を募集しています。SNSディレクター、エンジニア、デザイナーなど、専門スキルをお持ちの方を対象に、案件単位での外注・業務提携を行っています。",
      "url": "https://kiki-verb.co.jp/resource/",
      "itemListElement": [
        {
          "@type": "Offer",
          "name": "SNSアカウント運用・企画立案マーケター募集",
          "url": "https://kiki-verb.co.jp/resource/",
          "description": "X（旧Twitter）・Instagram・YouTube・LINEなどのSNS運用やコンテンツ企画を行えるマーケターを募集しています。SNS戦略の立案から投稿コンテンツ制作まで対応可能な方を対象としています。",
          "category": "業務委託",
          "areaServed": "JP",
          "priceSpecification": {
            "@type": "PriceSpecification",
            "priceCurrency": "JPY",
            "price": "案件単位（見積もり制）"
          }
        },
        {
          "@type": "Offer",
          "name": "Laravelを扱えるシステムエンジニア募集",
          "url": "https://kiki-verb.co.jp/resource/",
          "description": "Laravelフレームワークを使用したWebアプリケーション開発・運用・改修ができる方を募集しています。実務経験または公開済みプロダクトのある方を歓迎します。",
          "category": "業務委託",
          "areaServed": "JP",
          "priceSpecification": {
            "@type": "PriceSpecification",
            "priceCurrency": "JPY",
            "price": "案件単位（見積もり制）"
          }
        },
        {
          "@type": "Offer",
          "name": "React/Next.js・Vue/Nuxt.jsを扱えるフロントエンドエンジニア募集",
          "url": "https://kiki-verb.co.jp/resource/",
          "description": "モダンJSフレームワークを用いたフロントエンド開発経験をお持ちの方を募集しています。UI/UX改善・設計・開発を中心に担当していただきます。",
          "category": "業務委託",
          "areaServed": "JP",
          "priceSpecification": {
            "@type": "PriceSpecification",
            "priceCurrency": "JPY",
            "price": "案件単位（見積もり制）"
          }
        },
        {
          "@type": "Offer",
          "name": "AWS/GCPなどクラウドインフラエンジニア募集",
          "url": "https://kiki-verb.co.jp/resource/",
          "description": "AWSやGCPを利用したクラウドインフラの設計・構築・最適化を提案できるサーバーエンジニアを募集しています。コスト調整や構成改善の提案経験を歓迎します。",
          "category": "業務委託",
          "areaServed": "JP",
          "priceSpecification": {
            "@type": "PriceSpecification",
            "priceCurrency": "JPY",
            "price": "案件単位（見積もり制）"
          }
        },
        {
          "@type": "Offer",
          "name": "UI/UXデザイナー募集",
          "url": "https://kiki-verb.co.jp/resource/",
          "description": "ユーザーの体験設計を重視し、目的に応じたデザインを行えるUI/UXデザイナーを募集しています。サイトデザイン、LP、ロゴなど多様な案件に携われます。",
          "category": "業務委託",
          "areaServed": "JP",
          "priceSpecification": {
            "@type": "PriceSpecification",
            "priceCurrency": "JPY",
            "price": "案件単位（見積もり制）"
          }
        }
      ]
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "リソースご提供パートナー募集",
          "item": "https://kiki-verb.co.jp/resource/"
        }
      ]
    }
  ]
}
<?php elseif( is_post_type_archive( 'works' ) ) : ?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/works/",
      "url": "https://kiki-verb.co.jp/works/",
      "name": "制作実績",
      "description": "WordPressやLaravelを活用した企業サイトやウェブサービスの制作を中心に、ECサイトやLPなど多様な実績がございます。",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "CollectionPage",
      "@id": "https://kiki-verb.co.jp/works/$collectionpage",
      "url": "https://kiki-verb.co.jp/works/",
      "name": "制作事例",
      "description": "WordPressやLaravelを活用した企業サイトやウェブサービスの制作を中心に、ECサイトやLPなど多様なWeb制作事例を紹介します。",
      "isPartOf": { "@id": "https://kiki-verb.co.jp/" },
      "mainEntity": { "@id": "https://kiki-verb.co.jp/$organization" },
      "hasPart": [
<?php $the_query = new WP_Query(array('posts_per_page' => 14, 'post_type' => 'works', 'orderby' => 'post_date', 'order' => 'DESC')); ?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php
  preg_match( '/paragraph">(.*?)<\/p>/s', $post->post_content, $matches );
  $this_description = str_replace(["\r\n", "\r", "\n"], '', strip_tags(trim($matches[1])));
  $this_about = get_the_terms($post->ID, 'pattern')[0]->name;
  $this_keywords = array_map(fn($term) => '"'.$term->name.'"', get_the_terms($post->ID, 'part'));
  ?>
        {
          "@type": "CreativeWork",
          "name": "<?php echo get_the_title(); ?>",
          "url": "<?php echo get_permalink(); ?>",
          "image": "<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>",
          "description": "<?php echo $this_description; ?>",
          "about": "<?php echo $this_about; ?>",
          "keywords": [<?php echo implode(',', array_map(fn($term) => '"'.$term->name.'"', get_the_terms($post->ID, 'part'))); ?>]
        },
<?php endwhile; endif; wp_reset_postdata(); ?>
<?php $the_query = new WP_Query(array('posts_per_page' => 1, 'post_type' => 'works', 'orderby' => 'post_date', 'order' => 'DESC',  'offset' => 14)); ?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
  <?php
  preg_match( '/paragraph">(.*?)<\/p>/s', $post->post_content, $matches );
  $this_description = str_replace(["\r\n", "\r", "\n"], '', strip_tags(trim($matches[1])));
  $this_about = get_the_terms($post->ID, 'pattern')[0]->name;
  $this_keywords = array_map(fn($term) => '"'.$term->name.'"', get_the_terms($post->ID, 'part'));
  ?>
        {
          "@type": "CreativeWork",
          "name": "<?php echo get_the_title(); ?>",
          "url": "<?php echo get_permalink(); ?>",
          "image": "<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>",
          "description": "<?php echo $this_description; ?>",
          "about": "<?php echo $this_about; ?>",
          "keywords": [<?php echo implode(',', array_map(fn($term) => '"'.$term->name.'"', get_the_terms($post->ID, 'part'))); ?>]
        }
<?php endwhile; endif; wp_reset_postdata(); ?>
      ]
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "制作実績",
          "item": "https://kiki-verb.co.jp/works/"
        }
      ]
    }
  ]
}
<?php elseif( is_singular( 'works' ) ) : ?>
<?php
preg_match( '/paragraph">(.*?)<\/p>/s', $post->post_content, $matches );
$this_description = str_replace(["\r\n", "\r", "\n"], '', strip_tags(trim($matches[1])));
$this_about = get_the_terms($post->ID, 'pattern')[0]->name;
$this_keywords = array_map(fn($term) => '"'.$term->name.'"', get_the_terms($post->ID, 'part'));
?>
{
  "@context": "https://schema.org",
  "@graph": [
    // ページ情報
    {
      "@type": "WebSite",
      "@id": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/",
      "url": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/",
      "name": "<?php echo $post->post_title; ?>",
      "description": "<?php echo $this_description; ?>",
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" }
    },
    // メインの内容
    {
      "@type": "CreativeWork",
      "@id": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/$creativework",
      "url": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/",
      "name": "<?php echo $post->post_title; ?>",
      "alternateName": "<?php echo $post->post_title; ?> | 制作事例",
      "image": "<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>",
      "description": "<?php echo $this_description; ?>",
      "inLanguage": "ja",
      "datePublished": "<?php echo get_date_from_gmt( $post->post_date_gmt, 'c' ); ?>",
      "dateModified": "<?php echo get_date_from_gmt( $post->post_modified_gmt, 'c' ); ?>",
      "isPartOf": { "@id": "https://kiki-verb.co.jp/works/$collectionpage" },
      "creator": { "@id": "https://kiki-verb.co.jp/$organization" },
      "publisher": { "@id": "https://kiki-verb.co.jp/$organization" },
      "mainEntityOfPage": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/",
      "about": "<?php echo $this_about; ?>",
      "keywords": [<?php echo implode(',', $this_keywords); ?>]
    },
    // パンくず
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "ホーム",
          "item": "https://kiki-verb.co.jp/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "制作実績",
          "item": "https://kiki-verb.co.jp/works/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "<?php echo $post->post_title; ?>の制作実績",
          "item": "https://kiki-verb.co.jp/works/<?php echo $post->post_name; ?>/"
        }
      ]
    }
  ]
}
<?php endif; ?>
</script>