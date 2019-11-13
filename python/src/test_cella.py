import unittest
from cella import Cella

class TestCella(unittest.TestCase):
    def test_verifica_che_true_sia_uguale_a_true(self):
        #cella = Cella()
        self.assertEqual(True, True)

if __name__ == '__main__':
    unittest.main()