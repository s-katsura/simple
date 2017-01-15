require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "./"
css_dir = "./dist/css/"
sass_dir = "./src/css/"
images_dir = "./dist/img/"

# You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded

# output_style：SASS の書き出し方設定。:expanded, :nested, :compact or :compressed
# 「:expanded」{} で改行する形。よくみる CSS の記述形式はこれです。可読性たかし。
# 「:nested」Sass ファイルのネストがそのまま引き継がれる形。
# 「:compact」セレクタと属性を 1 行にまとめて出力。可読性低め。
# 「:compressed」圧縮して出力（全ての改行・コメントをトルツメ）。可読性は投げ捨て。


# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
