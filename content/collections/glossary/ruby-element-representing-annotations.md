---
id: a5adb8ff-8d49-472e-ad19-f8a32531d5d8
blueprint: html
title: 'Ruby Element: Annotating East Asian Text'
teaser: 'The ruby HTML element is used to represent a ruby annotation, which is a small text displayed above or next to East Asian characters to indicate pronunciation or meaning. This element is essential for languages like Japanese and Chinese, where ruby text (furigana) helps readers understand unfamiliar characters.'
reference_title:
  code: '<ruby>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' HTML element is used to represent ruby annotations, which are small text annotations typically used in East Asian typography to provide pronunciation or meaning for characters. Ruby annotations are often used in Japanese, Chinese, and Korean texts to help readers understand the pronunciation of unfamiliar characters or words.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element serves as a container for the base text and its corresponding ruby text. It typically contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<rt>'
      -
        type: text
        text: ' (ruby text) elements, which specify the annotations, and optionally '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' (ruby parentheses) elements, which provide fallback parentheses for browsers that do not support ruby annotations. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ruby>
            漢 <rp>(</rp><rt>かん</rt><rp>)</rp>
            字 <rp>(</rp><rt>じ</rt><rp>)</rp>
          </ruby>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In this example, the word "漢字" (kanji) is annotated with its phonetic reading "かんじ" (kanji) using ruby text.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0iie696
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Semantic Clarity'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<ruby>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content includes a ruby annotation, which is useful for both users and search engines.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': Proper use of ruby annotations enhances accessibility by providing additional information that can aid in understanding the pronunciation or meaning of text, especially for language learners or readers unfamiliar with certain characters.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Styling Flexibility'
              -
                type: text
                text: ': The appearance of ruby annotations can be customized using CSS to fit the design of the webpage, allowing for control over the positioning and styling of the annotations.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element is a valuable tool for incorporating ruby annotations in HTML documents, particularly for East Asian languages. It enhances the readability and accessibility of text by providing pronunciation or meaning cues, making it easier for users to understand unfamiliar characters or words.'
link: 'https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-ruby-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: ruby_annotations
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366557
seo_title: 'HTML Ruby Element: Annotating Text Explained'
seo_description: 'Explore the ruby HTML element for adding annotations to East Asian text, enhancing readability with pronunciation guides'
og_title: 'Understanding the HTML Ruby Element'
og_description: 'Learn how the ruby element in HTML is used to provide annotations for East Asian characters, offering pronunciation or meaning to aid comprehension.'
date: '2025-03-30'
---
