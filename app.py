from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/')
def home():
    return jsonify({'message': '¡Bienvenido a la API Flask!'})

@app.route('/convert', methods=['POST'])
def convert_temperature():
    data = request.get_json()
    
    if not data or 'fahrenheit' not in data:
        return jsonify({'error': "El campo 'fahrenheit' es requerido"}), 400
    
    try:
        fahrenheit = float(data['fahrenheit'])
        celsius = (5/9) * (fahrenheit - 32)
        return jsonify({'fahrenheit': fahrenheit, 'celsius': round(celsius, 2)})
    
    except ValueError:
        return jsonify({'error': "El valor de 'fahrenheit' debe ser numerico"}), 400

if __name__ == '__main__':
    app.run(debug=True)