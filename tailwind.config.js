/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,js}"],
    theme: {
        screens: {
            'sm': {'min': '640px', 'max': '767px'},
            // => @media (min-width: 640px and max-width: 767px) { ... }
      
            'md': {'min': '768px', 'max': '1023px'},
            // => @media (min-width: 768px and max-width: 1023px) { ... }
      
            'lg': {'min': '1024px', 'max': '1279px'},
            // => @media (min-width: 1024px and max-width: 1279px) { ... }
      
            'xl': {'min': '1280px', 'max': '1535px'},
            // => @media (min-width: 1280px and max-width: 1535px) { ... }
      
            '2xl': {'min': '1536px'},
            // => @media (min-width: 1536px) { ... }
            '3xl': '1600px',
        },
        extend: {
            colors: {
                black: '#000000',
                charcoal: 'rgb(54, 69, 79)',
                darkGreen: '#023020',
                darkPurple: '#301934',
                jetBlack: '#343434',
                licorice: 'rgb(27, 18, 18)',
                matteBlack: '#28282B',
                midnightBlue: '#191970',
                onyx: '#353935',

                aqua: 'rgb(0, 255, 255)',
                azure: '#F0FFFF',
                babyBlue: '#89CFF0',
                blue: 'rgb(0, 0, 255)',
                blueGray: '#7393B3',
                blueGreen: 'rgb(8, 143, 143)',
                brightBlue: '#0096FF',
                cadetBlue: 'rgb(95, 158, 160)',
                cobaltBlue: '#0047AB',
                cornflowerBlue: '#6495ED',
                cyan: 'rgb(0, 255, 255)',
                darkBlue: 'rgb(0, 0, 139)',
                denim: '#6F8FAF',
                egyptianBlue: 'rgb(20, 52, 164)',
                electricBlue: '#7DF9FF',
                glaucous: 'rgb(96, 130, 182)',
                jade: '#00A36C',
                indigo: 'rgb(63, 0, 255)',
                iris: '#5D3FD3',
                lightBlue: '#ADD8E6',
                navyBlue: '#000080',
                neonBlue: 'rgb(31, 81, 255)',
                pastelBlue: '#A7C7E7',
                periwinkle: '#CCCCFF',
                powderBlue: '#B6D0E2',
                robinEggBlue: '#96DED1',
                royalBlue: '#4169E1',
                sapphireBlue: '#0F52BA',
                seafoamGreen: 'rgb(159, 226, 191)',
                skyBlue: '#87CEEB',
                steelBlue: 'rgb(70, 130, 180)',
                teal: '#008080',
                turquoise: 'rgb(64, 224, 208)',
                ultramarine: 'rgb(4, 55, 242)',
                verdigris: 'rgb(64, 181, 173)',
                zaffre: '#0818A8',
                veryDarkBlue: 'hsl(233, 12%, 13%)',

                almond: '#EADDCA',
                brass: '#E1C16E',
                bronze: '#CD7F32',
                brown: '#A52A2A',
                buff: '#DAA06D',
                burgundy: '#800020',
                burntSienna: '#E97451',
                burntUmber: '#6E260E',
                camel: '#C19A6B',
                chestnut: '#954535',
                chocolate: 'rgb(123, 63, 0)',
                cinnamon: '#D27D2D',
                coffee: '#6F4E37',
                cognac: '#834333',
                copper: '#B87333',
                cordovan: '#814141',
                darkBrown: 'rgb(92, 64, 51)',
                darkRed: 'rgb(139, 0, 0)',
                darkTan: '#988558',
                ecru: '#C2B280',
                fallow: '#C19A6B',
                fawn: '#E5AA70',
                garnet: '#9A2A2A',
                goldenBrown: '#966919',
                khaki: '#F0E68C',
                lightBrown: '#C4A484',
                mahogany: '#C04000',
                maroon: '#800000',
                mocha: '#967969',
                nude: '#F2D2BD',
                ochre: '#CC7722',
                oliveGreen: '#808000',
                oxblood: 'rgb(74, 4, 4)',
                puce: '#A95C68',
                redBrown: '#A52A2A',
                redOchre: '#913831',
                russet: 'rgb(128, 70, 27)',
                saddleBrown: 'rgb(139, 69, 19)',
                sand: '#C2B280',
                sienna: '#A0522D',
                tan: '#D2B48C',
                taupe: '#483C32',
                tuscanRed: 'rgb(124, 48, 48)',
                wheat: '#F5DEB3',
                wine: '#722F37',

                ashGray: '#B2BEB5',
                darkGray: '#A9A9A9',
                gray: '#808080',
                gunmetalGray: '#818589',
                lightGray: '#D3D3D3',
                pewter: '#899499',
                platinum: '#E5E4E2',
                sageGreen: '#8A9A5B',
                silver: 'rgb(192, 192, 192)',
                slateGray: '#708090',
                smoke: '#848884',
                steelGray: '#71797E',

                aquamarine: 'rgb(127, 255, 212)',
                armyGreen: 'rgb(69, 75, 27)',
                brightGreen: '#AAFF00',
                cadmiumGreen: '#097969',
                celadon: '#AFE1AF',
                chartreuse: '#DFFF00',
                citrine: '#E4D00A',
                emeraldGreen: '#50C878',
                eucalyptus: '#5F8575',
                fernGreen: '#4F7942',
                forestGreen: '#228B22',
                grassGreen: '#7CFC00',
                green: '#008000',
                hunterGreen: '#355E3B',
                jade: '#00A36C',
                jungleGreen: '#2AAA8A',
                kellyGreen: '#4CBB17',
                lightGreen: '#90EE90',
                limeGreen: '#32CD32',
                lincolnGreen: '#478778',
                malachite: '#0BDA51',
                mintGreen: '#98FB98',
                mossGreen: '#8A9A5B',
                neonGreen: '#0FFF50',
                nyanza: '#ECFFDC',
                pastelGreen: '#C1E1C1',
                pear: '#C9CC3F',
                peridot: '#B4C424',
                pistachio: '#93C572',
                seaGreen: 'rgb(46, 139, 87)',
                shamrockGreen: '#009E60',
                springGreen: 'rgb(0, 255, 127)',
                vegasGold: '#C4B454',
                verdigris: '#40B5AD',
                viridian: 'rgb(64, 130, 109)',

                amber: '#FFBF00',
                apricot: '#FBCEB1',
                bisque: '#F2D2BD',
                brightOrange: '#FFAC1C',
                burntOrange: '#CC5500',
                butterscotch: '#E3963E',
                cadmiumOrange: '#F28C28',
                coral: '#FF7F50',
                coralPink: '#F88379',
                darkOrange: '#8B4000',
                desert: '#FAD5A5',
                gamboge: '#E49B0F',
                goldenYellow: '#FFC000',
                goldenrod: '#DAA520',
                lightOrange: '#FFD580',
                mango: '#F4BB44',
                navajoWhite: '#FFDEAD',
                neonOrange: '#FF5F1F',
                Orange: '#FFA500',
                pastelOrange: '#FAC898',
                peach: '#FFE5B4',
                persimmon: '#EC5800',
                pinkOrange: '#F89880',
                poppy: '#E35335',
                pumpkinOrange: '#FF7518',
                redOrange: '#FF4433',
                safetyOrange: '#FF5F15',
                salmon: '#FA8072',
                seashell: '#FFF5EE',
                sunsetOrange: '#FA5F55',
                tangerine: '#F08000',
                terraCotta: '#E3735E',
                yellowOrange: '#FFAA33',

                amaranth: '#9F2B68',
                cerise: '#DE3163',
                claret: '#811331',
                crimson: '#DC143C',
                darkPink: '#AA336A',
                dustyRose: '#C9A9A6',
                fuchsia: '#FF00FF',
                hotPink: '#FF69B4',
                lightPink: '#FFB6C1',
                millennialPink: '#F3CFC6',
                mulberry: '#770737',
                neonPink: '#FF10F0',
                orchid: '#DA70D6',
                pastelPink: '#F8C8DC',
                pink: '#FFC0CB',
                raspberry: '#E30B5C',
                rose: '#F33A6A',
                roseGold: '#E0BFB8',
                roseRed: '#C21E56',
                rubyRed: '#E0115F',
                thistle: '#D8BFD8',
                watermelonPink: '#E37383',

                brightPurple: '#BF40BF',
                byzantium: '#702963',
                eggplant: '#483248',
                lavender: '#E6E6FA',
                lightPurple: '#CBC3E3',
                lightViolet: '#CF9FFF',
                lilac: '#AA98A9',
                mauve: '#E0B0FF',
                mauveTaupe: '#915F6D',
                pastelPurple: '#C3B1E1',
                plum: '#673147',
                purple: '#800080',
                quartz: 'rgb(81, 65, 79)',
                redPurple: '#953553',
                tyrianPurple: '#630330',
                violet: 'rgb(127, 0, 255)',
                wisteria: '#BDB5D5',

                bloodRed: '#880808',
                brickRed: '#AA4A44',
                brightRed: '#EE4B2B',
                cadmiumRed: '#D22B2B',
                cardinalRed: '#C41E3A',
                carmine: '#D70040',
                cherry: '#D2042D',
                faluRed: 'rgb(123, 24, 24)',
                marsala: '#986868',
                neonRed: '#FF3131',
                pastelRed: '#FAA0A0',
                red: '#FF0000',
                scarlet: '#FF2400',
                tuscanRed: '#7C3030',
                venetianRed: '#A42A04',
                vermillion: '#E34234',


                alabaster: '#EDEADE',
                beige: '#F5F5DC',
                boneWhite: '#F9F6EE',
                cornsilk: '#FFF8DC',
                cream: '#FFFDD0',
                eggshell: '#F0EAD6',
                ivory: '#FFFFF0',
                linen: '#E9DCC9',
                offWhite: '#FAF9F6',
                parchment: '#FCF5E5',
                pearl: '#E2DFD2',
                vanilla: '#F3E5AB',
                white: '#FFFFFF',

                brightYellow: '#FFEA00',
                cadmiumYellow: '#FDDA0D',
                canaryYellow: '#FFFF8F',
                darkYellow: '#8B8000',
                flax: '#EEDC82',
                gold: '#FFD700',
                icterine: '#FCF55F',
                jasmine: '#F8DE7E',
                lemonYellow: '#FAFA33',
                maize: '#FBEC5D',
                mustardYellow: '#FFDB58',
                naplesYellow: '#FADA5E',
                pastelYellow: '#FFFAA0',
                saffron: '#F4C430',
                yellow: '#FFFF00',
            },
        },
    },
    plugins: [],
}